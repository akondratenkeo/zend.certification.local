ARG PHPVERSION
FROM php:${PHPVERSION}-cli

RUN useradd -u 1000 app \
    && usermod -aG www-data app

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libxml2-dev \
        libxslt-dev \
    && pecl install redis \
    && pecl install xdebug \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure opcache --enable-opcache \
    && docker-php-ext-install opcache \
    && docker-php-ext-install -j$(nproc) bcmath \
    && docker-php-ext-install -j$(nproc) soap \
    && docker-php-ext-install -j$(nproc) pdo \
    && docker-php-ext-install -j$(nproc) pdo_mysql \
    && docker-php-ext-install -j$(nproc) mysqli \
    && docker-php-ext-install -j$(nproc) intl \
    && docker-php-ext-install -j$(nproc) xsl \
    && docker-php-ext-install -j$(nproc) zip \
    && docker-php-ext-enable redis \
    && docker-php-ext-enable xdebug \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
