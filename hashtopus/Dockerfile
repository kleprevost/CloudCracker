# Install 
FROM php:7.1-apache

# Install some dependencies
RUN apt-get update && apt-get install -y \
        php7.0-mysql \

# Copy source code in
COPY . /var/www/html/