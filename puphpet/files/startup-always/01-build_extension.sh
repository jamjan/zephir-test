#!/bin/bash

# install Zephir
cd /var/www/zephir && ./install -c

# compile custom extension
cd /var/www/zephir.puphpet/jamjan && sudo zephir build