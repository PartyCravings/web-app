web-app-upgrade
===============

A Symfony project created on August 17, 2017, 3:51 pm.

# web-app
This holds the source code for partycravings' entire frontend stack

To generate translation files
php bin/console translation:extract zh --config=app --output-format=xliff

#For OAuth
You need to add check endpoints for each and every locale, since the project has full localization enabled!
php php-pm/bin/ppm start --bootstrap=symfony --app-env=prod --cgi-path=/usr/bin/php --port=8082 --workers=20 --debug=0