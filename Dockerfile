FROM php:8.1.31

# Install system dependencies
RUN apt-get update -y && \
    apt-get install -y openssl zip unzip git sqlite3 libsqlite3-dev curl && \
    docker-php-ext-install pdo pdo_sqlite

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - && \
    apt-get install -y nodejs

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /morent-admin-console

# Copy the application files
COPY . /morent-admin-console

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node.js dependencies
RUN npm install && npm run build

# Copy entrypoint script
COPY entrypoint.sh /usr/local/bin/

# Make the entrypoint script executable
RUN chmod +x /usr/local/bin/entrypoint.sh

# Expose the port
EXPOSE 8000

# Use the entrypoint script
ENTRYPOINT ["entrypoint.sh"]
