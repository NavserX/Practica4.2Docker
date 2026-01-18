FROM php:apache

RUN apt-get update && apt-get install -y \
    vim \
    nano \
    net-tools \
    openssl

RUN a2enmod ssl rewrite

COPY web/ /var/www/html/
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
COPY certs/ /etc/apache2/ssl/

EXPOSE 80 443
