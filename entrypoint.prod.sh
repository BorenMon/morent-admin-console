#!/bin/sh

# Check if .env exists, if not, copy from .env.example
if [ ! -f .env ]; then
  cp .env.prod.example .env.prod
fi

# Check if the SQLite database file exists, if not, create it
if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Link the storage
php artisan storage:link

php-fpm
