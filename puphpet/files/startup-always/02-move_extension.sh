#!/bin/bash

# create ini extension file in vgrants home directory
touch /home/vagrant/arraydigger.ini && echo "extension=jamjan.so" >> /home/vagrant/arraydigger.ini

# move ini file to mods available
sudo mv /home/vagrant/arraydigger.ini /etc/php/7.1/mods-available/arraydigger.ini

# change permission for moved file
sudo chmod 644 /etc/php/7.1/mods-available/arraydigger.ini

# change ownership for moved file
sudo chown root:root /etc/php/7.1/mods-available/arraydigger.ini

# create symbolic link in conf.d [autoscanned one]
sudo ln -s /etc/php/7.1/mods-available/arraydigger.ini /etc/php/7.1/fpm/conf.d/99-arraydigger.ini