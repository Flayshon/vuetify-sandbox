cp src/.env.example src/.env
docker-compose up -d --build
docker-compose run --rm --user `id -u`:`id -g` npm install
docker-compose run --rm --user `id -u`:`id -g` composer install
docker-compose run --rm --user `id -u`:`id -g` artisan migrate
docker-compose run --rm --user `id -u`:`id -g` php ./vendor/bin/phpunit