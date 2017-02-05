# stephyharrison

docker build -t=stephyharrison .
docker run --restart=always -d -e WORDPRESS_DB_PASSWORD=wA2OPb4A9vrHZB62GTMuT0FXUTje5bPWozln5cv0 --link MariaDB:mariadb.docker --name stephyharrison stephyharrison
