# ![Laravel 8 Example MyApp]

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


> ### Example Laravel codebase containing real world examples (CRUD, auth, advanced patterns and more) that adheres to the [RealWorld](https://github.com/gothinkster/realworld-example-apps) spec and API.

This repo is functionality complete — PRs and issues welcome!

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/8.x/installation)


Clone the repository

    git clone https://github.com/AhmadFaridHamzah/myapp.git

Switch to the repo folder

    cd myapp

Update all the dependencies using composer

    composer update

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

----------

## Folders

- `app` - Contains all the Eloquent models
- `app/Http/Controllers/` - Contains all the Controller files
- `app/Models/` - Contains all the models files
- `resources/views/` - Contains all the views files
- `app/BankStatusHelper.php` - files custom helper
- `public/` - Contains all the asset files and bootstrap template asset
- `config` - Contains all the application configuration files
- `database/factories` - Contains the model factory for all the models
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- `routes` - Contains all the api routes defined in web.php & web_02.php file

----------

# Sample Database to test controller function

**Need to import database sakila-schema.sql and sakila-data.sql.**

----------

# Make Second Connection Database

**Need to import database world_x.sql**
**Need modify setting in .env**
```
DB_CONNECTION_SECOND=mysql
DB_HOST_SECOND=127.0.0.1
DB_PORT_SECOND=3306
DB_DATABASE_SECOND=world_x
DB_USERNAME_SECOND=
DB_PASSWORD_SECOND=
```

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.