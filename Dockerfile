# Image PHP avec Apache (meme base que ton exemple)
FROM php:8.3-apache

# Modules Apache utiles pour un site vitrine
RUN a2enmod rewrite headers mime expires

# Repertoire de travail
WORKDIR /var/www/html

# Copie du site dans le conteneur
COPY . /var/www/html

# Permissions standards
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Port HTTP
EXPOSE 80

# Demarrage Apache
CMD ["apache2-foreground"]
