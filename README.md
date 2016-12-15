#Zephir and PHP5.6 #

* Zephir 0.9.5a-dev-bad1ef6b4d
* PHP 7.1.0
* Ubuntu 14.04

library *re2c* is required (included)


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