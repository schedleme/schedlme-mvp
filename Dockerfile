FROM php:8.1-apache

WORKDIR "/var/www/html"

ARG DEBIAN_FRONTEND=noninteractive

# Set environment variables with default values

# SMTP Configuration
ENV SMTP_SERVER="mail.example.com"
ENV SMTP_PORT="587"
ENV SMTP_USE_TLS="YES"
ENV SMTP_USE_STARTTLS="YES"
ENV SMTP_USERNAME=""
ENV SMTP_PASSWORD=""

# Easy!Appointments Configuration
ENV BASE_URL="http://localhost:8000"
ENV LANGUAGE="english"
ENV DEBUG_MODE="FALSE"
ENV DB_HOST="easyappointments-database"
ENV DB_NAME="easyappointments"
ENV DB_USERNAME="root"
ENV DB_PASSWORD="root"
ENV GOOGLE_SYNC_FEATURE="FALSE"
ENV GOOGLE_PRODUCT_NAME=""
ENV GOOGLE_CLIENT_ID=""
ENV GOOGLE_CLIENT_SECRET=""
ENV GOOGLE_API_KEY=""

RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd gettext mysqli pdo_mysql

RUN apt-get install -y \ 
    ssmtp

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN a2enmod rewrite
