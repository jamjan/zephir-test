#Zephir and PHP7 #

* Zephir 0.9.5a-dev-bad1ef6b4d
* PHP 7.1.0
* Ubuntu 16.04*
* host set as *http://zephir.php7-1.puphpet*
* IP 192.168.56.**71**

In addition to Ubuntu the library *re2c* is required (included)

*if your host machine is ubuntu-16.04 then download and install vagrant from the vagrant website rather than use system package [https://releases.hashicorp.com/vagrant/1.9.1/vagrant_1.9.1_x86_64.deb]

##Tests ##

###Test 1 ###
ArrayDigger supposed to search given array by given (string) path.

###Test 2 ###
Padder - array manipulations

###Test 3 ###
**TBD** Php Architect 11/2016 - Victor Bolshov
*https://github.com/crocodile2u/phparch-zephir/tree/step4*

###Test 4 ###
**TBD** Apriori procedure

###Test 5 ###
**TBD** Apriori package codedheartinside/apriori
*https://packagist.org/packages/codedheartinside/apriori*

##Tips ##
Zephir does not accept single-quotes. Convert *array('index')* to *array("index")* otherwise will not compile.

Every time I do vagrant up I have to make sure that directories
* ./zephir
* ./zephir.puphpet/jamjan/.temp/
* ./zephir.puphpet/jamjan/ext/

are removed.
 
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


* if your host machine is ubuntu-16.04 then download and install vagrant from the vagrant website rather than use system package
[https://releases.hashicorp.com/vagrant/1.9.1/vagrant_1.9.1_x86_64.deb]

####Ideas ####
Some ideas for future development:
* Move from Puphpet to pure Vagrant or Docker?
* In Arraydigger.zep swap *isset()* with *in_array* and *empty()* with *null!==*
* Test with frameworks
* Add function *php_pad_simplified()*  ./zephir.puphpet/public/test.inc.php. Actually convert it to class
