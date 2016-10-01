# Install 
FROM php:7.1-apache

# Install some dependencies
RUN apt-get update 
RUN apt-get install -y php-mysqli

# Copy source code in
COPY . /var/www/html/