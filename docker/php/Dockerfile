FROM php:8.1-fpm

RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN pecl install -o -f redis \
    && rm -rf /tmp/pear \ 
    && docker-php-ext-enable redis
    