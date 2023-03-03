Steps to run project
-------------------
1) Run "composer install" command to install dependencies
2) Create .env file if it's not exists and then set database name and Run "php artisan key:generate" command to generate key
3) Run "php artisan migrate --seed" to migrate database with dummy data
4) Run "php artisan serve" to server project