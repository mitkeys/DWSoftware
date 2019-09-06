#!/usr/bin/env bash

echo -e "\n$(sudo -u st ssh-agent)" >> ~st/.bash_profile
# || /bin/true to avoid startup error when .ssh is mounted as readonly
sudo chown st:st /var/www/.ssh || /bin/true