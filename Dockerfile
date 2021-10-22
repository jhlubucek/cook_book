FROM php:7.4.0-apache
MAINTAINER jan hlubucek <jhlubucek@jhlubucek.cz>


RUN apt-get update
RUN apt-get install -y git libzip-dev unzip
RUN a2enmod rewrite headers

# ============== nodejs npm
# RUN apt-get update && apt-get install -y wget gnupg g++ locales unzip dialog apt-utils git && apt-get clean

# RUN curl -fsSL https://deb.nodesource.com/setup_16.x | bash -
# RUN apt-get update && apt-get install -y nodejs npm && apt-get clean
# RUN apt-get install -y  npm && apt-get clean

#=============mysql
RUN docker-php-ext-install zip mysqli pdo pdo_mysql

#=============postgers
# RUN docker-php-ext-install zip pdo  pdo_pgsql

#=============composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#=============CRON
# RUN apt-get install -y cron
# RUN echo '*/5 * * * * root cd /var/www/html/app && /usr/local/bin/php bin/console app:create-actions' >>/etc/crontab
# RUN echo '55 * * * * root cd /var/www/html/app && /usr/local/bin/php bin/console app:prepare-daily-notifications' >>/etc/crontab
# RUN echo '*/5 * * * * root cd /var/www/html/app && /usr/local/bin/php bin/console app:prepare-notifications' >>/etc/crontab
# RUN echo '*/2 * * * * root cd /var/www/html/app && /usr/local/bin/php bin/console app:send-notifications' >>/etc/crontab

COPY . /var/www/html

WORKDIR /var/www/html/app

COPY ./php.ini /usr/local/etc/php/
RUN chown -R www-data:www-data /var/www/html/
# RUN cd app && composer install
