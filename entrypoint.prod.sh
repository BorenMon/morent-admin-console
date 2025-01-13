#!/bin/sh
composer install

npm install -g npm@11.0.0
npm install && npm run build

php artisan migrate

php-fpm
