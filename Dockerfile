# Imagen base con PHP y Apache
FROM php:8.2-apache

# Copiar todos los archivos del proyecto al servidor web
COPY . /var/www/html/

# Habilitar mod_rewrite (opcional pero recomendado)
RUN a2enmod rewrite

# Dar permisos básicos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
