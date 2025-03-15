FROM ubuntu:22.04

ARG DEBIAN_FRONTEND=noninteractive

RUN apt update && apt install -y \
    curl \
    wget \
    git \
    php8.1 \
    php8.1-fpm \
    php-zip php-curl php-dom php-fileinfo php-gd php-iconv php-intl \
    php-json php-mbstring php-pdo php-pdo-mysql php-xml \
    && rm -rf /var/lib/apt/lists/* /var/cache/apt/*

EXPOSE 9000

CMD php-fpm8.1 -F