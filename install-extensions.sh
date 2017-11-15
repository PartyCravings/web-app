#!/bin/sh

gmpLoad=php -r "print_r(extension_loaded('gmp'));" 2>/dev/null

if [ gmpLoad = 1 ]; then

	if [ sudo add-apt-repository 2>/dev/null ]; then

    	sudo apt-get install -y python-software-properties
    else
    	continue
	fi

	sudo add-apt-repository -y ppa:ondrej/php
	sudo apt update -y
	sudo apt install libgmp-dev -y
	sudo apt install php-gmp -y
	sudo apt install php-cgi -y

else
	continue
fi