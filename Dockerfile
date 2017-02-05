FROM wordpress

ENV WORDPRESS_DB_HOST=mariadb.docker
# ENV WORDPRESS_DB_USER=root
# ENV WORDPRESS_DB_PASSWORD=temp

ENV WORDPRESS_DB_NAME=wordpress
ENV WORDPRESS_TABLE_PREFIX=shcom_wp_

# # delete default themes
# RUN nohup sleep 60 && rm -rf /var/www/html/wp-content/themes/twenty*
# #            /var/www/html/wp-content/themes

# copy custom content including themes
COPY wp-content wp-content
