#!/usr/bin/env bash

# supervisor won't create this directory making mysql to fail (service mysql start does it)
mkdir /var/run/mysqld
chown mysql:mysql /var/run/mysqld