FROM ubuntu:16.04
LABEL Description="Container for S&T Developer Candidate Test"

RUN export DEBIAN_FRONTEND=noninteractive && apt-get update

# locales package was removed from ubuntu 16.04 base image
# more info at https://hub.docker.com/_/ubuntu/
# Make the "en_US.UTF-8" locale enabled by default
RUN apt-get update && apt-get install -y locales && rm -rf /var/lib/apt/lists/* \
	&& localedef -i en_US -c -f UTF-8 -A /usr/share/locale/locale.alias en_US.UTF-8

# Evitar error de mercurial "UnicodeDecodeError: 'ascii' codec can't decode byte" (realmente Python, Ruby o lo que dependa de ellas en la terminal)
RUN locale-gen en_US.UTF-8
ENV LANG en_US.UTF-8
ENV LANGUAGE en_US:en
ENV LC_ALL en_US.UTF-8
ENV ENV COMPOSER_PROCESS_TIMEOUT=2000
RUN export DEBIAN_FRONTEND=noninteractive && apt-get update
RUN export DEBIAN_FRONTEND=noninteractive && \

    apt-get install -y --no-install-recommends ca-certificates apt-transport-https wget && \

    # Install Ondrej PPA which provides PHP 7.1
    apt-get install -y  software-properties-common python-software-properties && \
    # avoid error "'ascii' codec can't decode byte 0xc5 in position 92: ordinal not in range(128)" when importing
    # ondrej ppa
    add-apt-repository -y ppa:ondrej/php && \

    apt-get update && \

    # Mysql PROMPT prevention setup
    echo 'mysql-server mysql-server/root_password password rootlocal' | debconf-set-selections && \
    echo 'mysql-server mysql-server/root_password_again password rootlocal' | debconf-set-selections && \

    # Base system utils
    apt-get update && apt-get install -y \

        htop sudo mercurial git vim nano zip  \

        # Apache, PHP and MySQL
        apache2 php7.1-fpm libapache2-mod-rpaf percona-server-server-5.6 \

        # used by run-tests.sh
        curl \

        # Common PHP modules
        php7.1-cli php7.1-mcrypt php7.1-intl php7.1-mysql php7.1-bcmath \
        php7.1-gd php-pear php7.1-curl php7.1-apcu \
        php7.1-zip php7.1-mbstring php7.1-xmlreader php7.1-ssh2 php7.1-soap && \

    apt-get purge && \

    # Clean apt cache
    apt-get clean all && \

    #  Apache2 Configuration
    a2enmod expires rewrite headers proxy_fcgi && \

    rm -r /var/www/html && \

    # Setup application user
    # Important: the uid must match the uid of your user in the host machine (the one you use to edit S&T files)
    adduser --disabled-password st --gecos '' --home /var/www && \
    adduser st sudo && \
    echo '%sudo ALL=(ALL) NOPASSWD:ALL' >> /etc/sudoers && \
    chown st:st -R /var/www

# Container configuration files
#

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy initialization scripts
COPY docker.d/scripts/root/ /

COPY docker.d/scripts/bash_profile /var/www/.bash_profile
RUN chown st:st /var/www/.bash_profile

# Once everything is installed copy configuration files
COPY docker.d/etc/ /etc/

# fpm and cli php.ini files should be the same to avoid problems, specially when testing - for example: the cli may set a cookie
# in one place while the browser may set it in another
RUN cp /etc/php/7.1/fpm/php.ini  /etc/php/7.1/cli/php.ini

# Apply Ubuntu fixes for Docker
RUN /fix_ubuntu.sh && rm /fix_ubuntu.sh

#
# PART 3: Container execution
#

# Add the read-only keys that have access to S&T repo
ADD docker.d/ssh/ /var/www/.ssh
RUN chmod -R 600 /var/www/.ssh/*
RUN chown st:st -R /var/www/.ssh

# Clone S&T code
USER st
RUN hg clone ssh://hg@bitbucket.org/sperantus/candidate_test /var/www/html

WORKDIR /var/www/html

RUN export CREATION_TIME="$(date +%s)" && \
    curl "https://www.random.org/integers/?num=1&min=1&max=9999999&format=plain&col=1&base=10&rnd=id.$CREATION_TIME" > app/config/nacl && \
    echo $CREATION_TIME > app/config/creation_time

# Set terminal in order for console ui's to work correctly
ENV TERM=xterm

# Required by `pipenv shell` command
ENV SHELL=/bin/bash

# Apache
EXPOSE 80

USER st

# Default MySQL credentials
CMD bash -c 'echo -e "[mysql]\nuser=root\npassword=rootlocal" > ~/.my.cnf'

RUN hg add .

CMD ["sudo", "/my_init"]


