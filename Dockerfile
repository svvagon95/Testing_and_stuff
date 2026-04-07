FROM php:8.5-apache

WORKDIR /var/www/html

COPY . /var/www/html
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite

EXPOSE 80