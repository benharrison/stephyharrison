FROM wordpress

ENV WORDPRESS_DB_HOST=mariadb.docker
ENV WORDPRESS_DB_NAME=wordpress

# copy custom content including themes
# COPY wp-content wp-content
