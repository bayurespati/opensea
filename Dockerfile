FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libicu-dev \
    locales \
    libzip-dev \
    jpegoptim optipng pngquant gifsicle \
    vim \
    libzip-dev \
    git \
    cron \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libldap2-dev \
    zip \
    unzip \
    tzdata

RUN ln -fs /usr/share/zoneinfo/Asia/Jakarta /etc/localtime \
    &&  dpkg-reconfigure --frontend noninteractive tzdata

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install exif
RUN docker-php-ext-install pcntl
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install gd
RUN docker-php-ext-install -j$(nproc) intl
RUN docker-php-ext-configure ldap --with-libdir=lib/$(arch)-linux-gnu/
RUN docker-php-ext-install ldap
RUN docker-php-ext-install -j$(nproc) zip
RUN docker-php-source delete
RUN rm -r /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY . /var/www/html/

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

RUN chmod -R 777 /var/www/html/storage

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install --optimize-autoloader --no-dev

RUN chown -R www-data:www-data /var/www/html/vendor

COPY ./docker/php/www.conf /usr/local/etc/php-fpm.d/www.conf

COPY ./docker/php/local.ini /usr/local/etc/php/conf.d

COPY ./docker/php/docker-entrypoint.sh /usr/local/bin/

# COPY ./docker/php/cron /etc/cron.d/cron

# RUN chmod 777 /etc/cron.d/cron

# RUN crontab /etc/cron.d/cron

EXPOSE 9000

# CMD cron && php-fpm && date
CMD php-fpm && date
