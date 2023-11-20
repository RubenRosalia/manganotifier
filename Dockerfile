# Use the official PHP Apache image
FROM php:8.2.8-apache

# Install the mysqli extension
RUN docker-php-ext-install mysqli

# Install system dependencies
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        curl \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js and npm from the default Debian repositories
RUN apt-get update \
    && apt-get install -y --no-install-recommends nodejs npm \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Set the working directory
WORKDIR /var/www/html

# Copy the contents of the current directory to the web server's document root
COPY ./ /var/www/html

# Gives permission
RUN chown -R www-data:www-data /var/www/html

# Start the Apache server
CMD ["apache2-foreground"]
