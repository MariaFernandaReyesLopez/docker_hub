FROM ubuntu:20.04

LABEL description = "Docker Hub + SQLite3"
LABEL mainteiner = "Maria Fernanda"
LABEL version = "v1"

RUN apt-get update
RUN apt-get -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php

RUN apt-get -y update && apt-get install -y \
    php7.0 \
    php7.0-fpm \
    php7.0-mysql \
    php7.0-json \
    php7.0-curl \
    php7.0-sqlite3 \
    php7.0-xml \
    php7.0-bcmath \
    php7.0-zip \
    php7.0-mbstring \
    php-xdebug \
    php-ast

EXPOSE 8080