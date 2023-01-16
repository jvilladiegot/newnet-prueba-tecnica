FROM php:8.0-fpm-alpine

ARG PHPGROUP
ARG PHPUSER

ENV PHPGROUP=${PHPGROUP}
ENV PHPUSER=${PHPUSER}

# Install system dependencies
RUN apk add --no-cache zip libzip-dev
RUN docker-php-ext-configure zip
RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql

RUN set -ex \
    	&& apk --no-cache add postgresql-dev\
    	&& docker-php-ext-install pdo pdo_pgsql

RUN adduser -g ${PHPGROUP} -s /bin/sh -D ${PHPUSER}; exit 0

WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD . /var/www
RUN chown -R www-data:www-data /var/www
#RUN chmod -R 755 /var/www/storage

# Remove Cache
RUN rm -rf /var/cache/apk/*

# Add UID '1000' to www-data
RUN echo http://dl-2.alpinelinux.org/alpine/edge/community/ >> /etc/apk/repositories
RUN apk --no-cache add shadow && usermod -u 1000 www-data

# Expose port 9000 and start php-fpm server
CMD ["php-fpm"]
