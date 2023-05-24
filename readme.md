docker load -i mysql.tar
docker load -i php_crud-php.tar
docker load -i phpmyadmin.tar

docker images
docker compose up -d
