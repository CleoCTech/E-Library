Getting started
Installation
Please check the official laravel installation guide for server requirements before you start. Official Documentation

Clone the repository

git clone git@github.com:gothinkster/laravel-realworld-example-app.git
Switch to the repo folder

cd laravel-realworld-example-app
Install all the dependencies using composer

composer install
Copy the example env file and make the required configuration changes in the .env file

cp .env.example .env
Generate a new application key

php artisan key:generate
Generate a new JWT authentication secret key

php artisan jwt:generate
Run the database migrations (Set the database connection in .env before migrating)

php artisan migrate
Start the local development server

php artisan serve
