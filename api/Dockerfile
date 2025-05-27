# Etapa Composer (para copiar binario)
FROM composer:2 AS composer

# Imagen principal con PHP + Apache
FROM php:8.2-apache

# Instala extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git curl libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo pdo_mysql zip mbstring exif pcntl

# Instala Composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

# Copia archivos al contenedor
COPY . /var/www/html

# Crea archivo sqlite vacío si no existe
RUN mkdir -p /var/www/html/database && touch /var/www/html/database/database.sqlite

# Establece directorio de trabajo
WORKDIR /var/www/html

# Instala dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Establece permisos necesarios
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Habilita Apache mod_rewrite
RUN a2enmod rewrite

# Cambiar DocumentRoot a /public y asegurar configuración de permisos
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf && \
    sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/c\<Directory /var/www/html/public>\nOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>' /etc/apache2/apache2.conf

# Cambiar el puerto de Apache a 8080 para Cloud Run
ENV APACHE_PORT=8080
RUN sed -i "s/80/${APACHE_PORT}/g" /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Exponer el puerto 8080
EXPOSE 8080
