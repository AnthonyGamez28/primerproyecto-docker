FROM php:8.2-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar archivos al contenedor
COPY ./app /var/www/html

# Habilitar permisos
RUN chmod -R 755 /var/www/html && chown -R www-data:www-data /var/www/html

EXPOSE 80
