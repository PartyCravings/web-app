#!/bin/sh

gmpLoad=php -r "print_r(extension_loaded('gmp'));" 2>/dev/null

if [ gmpLoad = 1 ]; then

	if [ add-apt-repository 2>/dev/null ]; then

    	apt install software-properties-common -y
    else
    	continue
	fi

	LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php
	apt update
	apt install libgmp-dev -y
	apt install php-gmp -y
	

else
	continue
fi

(git clone https://github.com/php-pm/php-pm && cd php-pm/ && composer require php-pm/httpkernel-adapter:dev-master) ; nohup (php-pm/bin/ppm start --bootstrap=symfony --port=$PORT --app-env=prod --cgi-path=/usr/bin/php --debug=0 --concurrent-requests=1) &