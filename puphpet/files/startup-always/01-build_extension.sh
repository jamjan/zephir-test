#!/bin/bash

# clone and install Zephir
cd /var/www && git clone https://github.com/phalcon/zephir && ./install -c

# compile custom extension
cd /var/www/zephir.puphpet/jamjan && sudo zephir build