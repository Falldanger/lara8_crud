### Set up

install PHP-7.4+

install MySQL Server

install composer

cd /var/www/

git clone https://github.com/Falldanger/lara8_crud.git folder

cd folder

composer install

define database, APP_KEY in .env 

php artisan migrate --seed

php artisan serve
