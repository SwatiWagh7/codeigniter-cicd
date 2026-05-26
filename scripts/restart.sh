#!/bin/bash

cd /var/www/codeigniter-app

composer install --no-dev --optimize-autoloader

chown -R www-data:www-data writable
chmod -R 775 writable

systemctl restart apache2
