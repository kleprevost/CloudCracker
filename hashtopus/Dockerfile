# Install 
FROM php:7.1-apache

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli

# Copy source code in
COPY php.ini /usr/local/etc/php/
COPY . /var/www/html/
RUN chmod -R 777 /var/www/html/
RUN chown www-data /var/www/html/
RUN chmod -R 777 /tmp/