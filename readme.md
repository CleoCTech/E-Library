# Getting started

## Installation
Please check the official laravel installation guide for server requirements before you start. Official Documentation

Clone the repository

    git clone git@github.com:CleoCTech/E-Library.git

Switch to the repo folder

    cd E-Library
Install all the dependencies using composer

    composer install
Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env
Generate a new application key

    php artisan key:generate

Run the database migrations (Set the database connection in .env before migrating)

    php artisan migrate
Or you can import the db once you create the database name and ignore the migration command
    
    db name: e_library

Create a symlink to the public folder

    php artisan storage:link

Start the local development server

    php artisan serve
