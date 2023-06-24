FROM php:fpm-alpine
MAINTAINER Aymen AMAIRIA <amairia.aymen@gmail.com>

RUN apk update
RUN apk add openssh-client \
wget \
dos2unix \
iputils-ping \
unzip \
curl \
libxml2-dev \
libffi-dev \
curl-dev \
freetype-dev \
libjpeg-turbo-dev \
libpng-dev \
gettext-dev

RUN docker-php-ext-install bcmath calendar ctype curl dba dl_test dom exif ffi fileinfo filter ftp gd pdo pdo_mysql opcache
COPY php/production/opcache.ini /usr/local/etc/php/conf.d/opcache.ini


#Composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN chmod +x /usr/local/bin/composer

#PHPUnit
RUN wget https://phar.phpunit.de/phpunit-6.5.phar
RUN chmod +x phpunit-6.5.phar
RUN mv phpunit-6.5.phar /usr/local/bin/phpunit
