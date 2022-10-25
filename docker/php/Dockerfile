# @see https://minasami.com/2021/06/23/part-1-setup-reactjs-symfony-app-with-hotloading.html

FROM php:8-fpm-alpine

MAINTAINER Mina Sami <mina.nsami@gmail.com>
MAINTAINER Pierrot Evrard <pierrotevrard@gmail.com>

RUN apk update \
    && apk add git \
        curl \
        vim \
        wget \
        bash \
        zlib \
        zlib-dev \
        patch \
        icu-dev

# install php dependencies
RUN apk add --no-cache $PHPIZE_DEPS \
    && pecl install -f xdebug \
    && docker-php-ext-install intl opcache bcmath sockets \
    && docker-php-ext-enable xdebug intl opcache bcmath sockets \
    && rm -rf /var/lib/apt/lists/*

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer selfupdate

# Set timezone
ENV TIMEZONE=Etc/UCT
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone \
    && printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini \
    && "date"

COPY . /var/www/api
WORKDIR /var/www/api

# https://stackoverflow.com/questions/44864852/docker-execute-command-after-mounting-a-volume
CMD sh -c "composer install --ignore-platform-reqs --no-scripts && php-fpm -F"

EXPOSE 9000
