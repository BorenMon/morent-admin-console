#!/bin/sh
composer install

npm install && npm run build

php-fpm
