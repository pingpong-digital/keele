FROM pingpongdigital/wordpress:latest
COPY ./wp-content /var/www/html/wp-content
ENTRYPOINT ["docker-entrypoint-wrapper.sh"]
CMD ["apache2-foreground"]