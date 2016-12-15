#Zephir and PHP7 #

* Zephir 0.9.5a-dev-bad1ef6b4d
* PHP 7.1.0
* Ubuntu 16.04*

library *re2c* is required (included)

*if your host machine is ubuntu-16.04 then download and install vagrant from the vagrant website rather than use system package [https://releases.hashicorp.com/vagrant/1.9.1/vagrant_1.9.1_x86_64.deb]

##Tests ##

###Test 1 ###
ArrayDigger supposed to search given array by given (string) path.

###Test 2 ###
Php Architect 11/2016 - Victor Bolshov
*https://github.com/crocodile2u/phparch-zephir/tree/step4*

###Test 3 ###
Apriori procedure

###Test 4 ###
Apriori package codedheartinside/apriori
*https://packagist.org/packages/codedheartinside/apriori*




##Post deployment ##
There are post deployment scripts located at `./puphpet/files/startup-always/`

######Clone and install Zephir ######
* cd /var/www && git clone https://github.com/phalcon/zephir
* cd /var/www/zephir && ./install -c

######Build extension ######
* cd /var/www/zephir && ./install -c
* cd /var/www/zephir.puphpet/jamjan && sudo zephir build

######Move extension ######
* touch /home/vagrant/arraydigger.ini && echo "extension=jamjan.so" >> /home/vagrant/arraydigger.ini
* sudo mv /home/vagrant/arraydigger.ini /etc/php/7.1/mods-available/arraydigger.ini
* sudo chmod 644 /etc/php/7.1/mods-available/arraydigger.ini
* sudo chown root:root /etc/php/7.1/mods-available/arraydigger.ini
* sudo ln -s /etc/php/7.1/mods-available/arraydigger.ini /etc/php/7.1/fpm/conf.d/99-arraydigger.ini

######Restart PHP-FPM ######
sudo systemctl reload php7.1-fpm.service