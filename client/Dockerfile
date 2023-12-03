FROM php:8.1-fpm

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt-get update && \
    apt-get install -y curl nginx libzip-dev && \
    docker-php-ext-install zip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN cp $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY ./default.conf /etc/nginx/sites-available/default
COPY . .

WORKDIR /var/www/html

RUN mkdir -p /var/www/cache && \
    chown -R www-data:root /var/www/cache

CMD composer install \
  && php-fpm -D && nginx -g "daemon off;"

EXPOSE 80
