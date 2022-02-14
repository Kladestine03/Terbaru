FROM php:apache
COPY *.php /var/www/html/

RUN chown www-data:www-data /var/www/html/
RUN chmod 774 /var/www/html/

RUN docker-php-ext-install mysqli





