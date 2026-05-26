#!/bin/bash

chown -R www-data:www-data /var/www/codeigniter-app/writable
chmod -R 775 /var/www/codeigniter-app/writable

systemctl restart apache2
