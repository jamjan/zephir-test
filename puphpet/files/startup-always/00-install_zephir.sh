#!/bin/bash

# clone Zephir
cd /var/www && git clone https://github.com/phalcon/zephir

# install Zephir
cd /var/www/zephir && ./install -c