# Use an official PHP image with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy your app's source code to Apache's root directory
COPY . /var/www/html/

# Install PHP extensions (optional: if needed for PHPMailer or other libraries)
RUN docker-php-ext-install mysqli

# Set working directory
WORKDIR /var/www/html

# Set permissions (optional, for email or file writes)
RUN chown -R www-data:www-data /var/www/html

# Expose Apache port
EXPOSE 80
