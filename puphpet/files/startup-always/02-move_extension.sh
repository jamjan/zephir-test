#!/bin/bash

# create ini extension file in vagrants home directory
touch /home/vagrant/arraydigger.ini && echo "extension=jamjan.so" >> /home/vagrant/arraydigger.ini

# move ini file to mods available
sudo mv /home/vagrant/arraydigger.ini /etc/php/5.6/mods-available/arraydigger.ini

# change permission for moved file
sudo chmod 644 /etc/php/5.6/mods-available/arraydigger.ini

# change ownership for moved file
sudo chown root:root /etc/php/5.6/mods-available/arraydigger.ini

# create symbolic link in conf.d [autoscanned one]
sudo ln -s /etc/php/5.6/mods-available/arraydigger.ini /etc/php/5.6/fpm/conf.d/99-arraydigger.ini