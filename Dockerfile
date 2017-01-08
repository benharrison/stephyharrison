FROM wordpress

ENV WORDPRESS_DB_HOST=mariadb.docker
# ENV WORDPRESS_DB_USER=root
# ENV WORDPRESS_DB_PASSWORD=temp

ENV WORDPRESS_DB_NAME=wordpress
ENV WORDPRESS_TABLE_PREFIX=shcom_wp_

# copy custom content including themes
COPY wp-content wp-content

# delete default themes
# CMD rm -rf /var/www/html/wp-content/themes/twenty*
