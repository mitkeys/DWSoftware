#!/usr/bin/env bash
#
# Based on https://github.com/nimmis/docker-ubuntu/blob/master/16.04/root/fix.sh
#
#

set -e

# fix docker issue #1024
dpkg-divert --local --rename --add /sbin/initctl
ln -sf /bin/true /sbin/initctl

# https://bugs.launchpad.net/launchpad/+bug/974584
dpkg-divert --local --rename --add /usr/bin/ischroot
ln -sf /bin/true /usr/bin/ischroot

# enable multiverse repository
sed -i 's/^#\s*\(deb.*multiverse\)$/\1/g' /etc/apt/sources.list
apt-get update

# install add-apt-repository command for adding repos.
apt-get install -y --no-install-recommends software-properties-common

# set US locale
apt-get install -y --no-install-recommends language-pack-en
locale-gen en_US

# installing syslog-ng, with workaround https://bugs.launchpad.net/ubuntu/+source/syslog-ng/+bug/1242173
apt-get install -y --no-install-recommends syslog-ng syslog-ng-core
# can't access /proc/kmsg. https://groups.google.com/forum/#!topic/docker-user/446yoB0Vx6w
sed -i -E 's/^(\s*)system\(\);/\1unix-stream("\/dev\/log");/' /etc/syslog-ng/syslog-ng.conf

# prepare for using supervisor
apt-get install -y --no-install-recommends supervisor

# fix config for supervisor after install to prevent warnings when installing
rm -Rf /etc/supervisor
mv /etc/supervisor.final /etc/supervisor

# setup cron and logrotate
apt-get install -y --no-install-recommends cron logrotate

mkdir /etc/container_environment
mkdir /etc/workaround-docker-2267

# setup logfile to be writable by all
touch /var/log/startup.log
chmod 666 /var/log/startup.log