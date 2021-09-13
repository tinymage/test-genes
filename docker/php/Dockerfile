FROM php:7.4-fpm

RUN apt-get update && apt-get install -y git libzip-dev && docker-php-ext-install -j$(nproc) pdo_mysql zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /var/www
CMD ["php-fpm"]