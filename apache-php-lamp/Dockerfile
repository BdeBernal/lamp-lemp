FROM ubuntu:22.04

ARG DEBIAN_FRONTEND=noninteractive

RUN apt update && apt install -y \
    curl \
    wget \
    git \
    apache2 \
    php8.1 \
    php-zip php-curl php-dom php-fileinfo php-gd php-iconv php-intl \
    php-json php-mbstring php-pdo php-pdo-mysql php-xml \
    && rm -rf /var/lib/apt/lists/* /var/cache/apt/*

RUN a2enmod ssl
RUN a2enmod rewrite

EXPOSE 80 443

ENTRYPOINT ["apachectl", "-D", "FOREGROUND"]