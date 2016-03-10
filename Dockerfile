FROM brunogasparin/laravel-apache:5-onbuild

# Install postgres libraries and headers for C language
RUN apt-get update && apt-get install -y \
        libpq-dev \
        libpng-dev \
        && apt-get clean \
        && rm -rf /var/lib/apt/lists/*

# Install postgres php extension
RUN docker-php-ext-install \
        pdo_pgsql 

# Install Image manipulation Dependencies
RUN docker-php-ext-install \
        fileinfo \
        gd
 

# Configure php
COPY resources/docker/images/php/conf.d/timezone.ini $PHP_INI_DIR/conf.d/  