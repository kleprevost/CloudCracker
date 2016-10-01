# Install 
FROM php:7.1-apache

# Install some dependencies
RUN apt-get update 
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev docker-php-ext-install pdo_mysql mysqli mbstring gd iconv mcrypt php-mysqli

# Copy source code in
COPY . /var/www/html/