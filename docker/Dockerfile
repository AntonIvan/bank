FROM php:7.3.11-fpm

# this is a prod Dockerfile

ENV DEBIAN_FRONTEND noninteractive

ADD ./ /app
WORKDIR /app

# install basic tools and php-related libraries
RUN apt-get update && apt-get install -y \
  wget \
  curl \
  git \
  gettext-base \
  zlib1g-dev \
  libssl-dev \
  libzip-dev \
  libmcrypt-dev \
  libcurl4-gnutls-dev \
  cron \
  zip \
  locales \
  libpq-dev
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
RUN composer require guzzlehttp/guzzle:~6.0
RUN composer require symfony/dom-crawler


