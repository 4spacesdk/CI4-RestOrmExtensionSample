# PHP & Apache serving CI4
FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    nano \
    curl \
    zip \
    unzip \
    git \
    libicu-dev

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# MySQL Client
RUN docker-php-ext-install intl mysqli pdo_mysql

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

## APACHE ##
ENV APP_HOME /var/www/html
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data
RUN sed -i -e "s/html/html\/ci4\/public/g" /etc/apache2/sites-enabled/000-default.conf
RUN a2enmod rewrite

# Copy CI4 & Vue files
COPY --chown=www-data . $APP_HOME

RUN cd ci4 && composer install
