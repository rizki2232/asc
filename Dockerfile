FROM php:8.1-apache

COPY . /var/www/html

RUN docker-php-ext-install mysqli

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Optional: Tambahkan ini kalau kamu pakai .htaccess
RUN a2enmod rewrite

# Pastikan Apache tahu folder ini bisa diakses
RUN echo '<Directory /var/www/html>' > /etc/apache2/conf-available/custom.conf \
 && echo '    Options Indexes FollowSymLinks' >> /etc/apache2/conf-available/custom.conf \
 && echo '    AllowOverride All' >> /etc/apache2/conf-available/custom.conf \
 && echo '    Require all granted' >> /etc/apache2/conf-available/custom.conf \
 && echo '</Directory>' >> /etc/apache2/conf-available/custom.conf \
 && a2enconf custom
