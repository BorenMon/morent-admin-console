FROM php:8.1.31

# Install system dependencies
RUN apt-get update -y && \
    apt-get install -y openssl zip unzip default-libmysqlclient-dev curl && \
    docker-php-ext-install pdo pdo_mysql

# Install Node.js and npm
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - && \
    apt-get install -y nodejs

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set the working directory
WORKDIR /var/www/html

# Copy the application files
COPY . /var/www/html

# Copy entrypoint script
COPY entrypoint.sh /usr/local/bin/

# Make the entrypoint script executable
RUN chmod +x /usr/local/bin/entrypoint.sh

# Use the entrypoint script
ENTRYPOINT ["entrypoint.sh"]
