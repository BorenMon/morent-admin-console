#!/bin/sh

# Check if .env exists, if not, copy from .env.example
if [ ! -f .env ]; then
  cp .env.example .env
fi

# Check if the SQLite database file exists, if not, create it
if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi

# Generate application key if not set
if [ -z "$(php artisan key:generate --show)" ]; then
  php artisan key:generate
fi

# Run migrations
php artisan migrate

# Link the storage
php artisan storage:link

# Start the PHP server
php artisan serve --host=0.0.0.0 --port=8000
