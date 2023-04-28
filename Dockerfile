FROM php:8.1-apache

LABEL maintainer="diforg@gmail.com"
LABEL description="PHP 8.1"

RUN apt-get update -y && apt-get install -y libzip-dev

# Install selected extensions and other stuff
RUN apt-get update \
    && docker-php-ext-install zip bcmath gd curl xml mbstring mysqli \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV APACHE_DOCUMENT_ROOT /application/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

WORKDIR "/application"