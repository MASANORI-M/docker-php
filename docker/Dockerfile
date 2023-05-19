FROM php:8.1.8-fpm

# バックスラッシュでコマンドを結合し、容量を圧縮する
RUN set -x \
    && apt-get update \
    && apt-get install -y libicu-dev libpng-dev libzip-dev wget zip unzip vim \
    && docker-php-ext-install bcmath exif gd intl mysqli pdo_mysql sockets zip

RUN pecl install xdebug && docker-php-ext-enable xdebug

# composer はインストール済にしておくため、get_composer.sh を実行しておく
COPY get_composer.sh /tmp/
RUN set -x && chmod 777 /tmp/get_composer.sh && /tmp/get_composer.sh