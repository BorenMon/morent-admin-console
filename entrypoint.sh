#!/bin/sh

# Check if the SQLite database file exists, if not, create it
if [ ! -f database/database.sqlite ]; then
  touch database/database.sqlite
fi

# Generate application key if not set
php artisan key:generate

# Run migrations
php artisan migrate

# Link the storage
php artisan storage:link

# Start the PHP server
php artisan serve --host=0.0.0.0 --port=8000
