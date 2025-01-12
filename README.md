# Laravel Short URL Service

This project implements a URL shortening service built with Laravel. It allows users to shorten long URLs and provides functionality to redirect shortened URLs to their original destinations.

## Installation

After cloning the repo, go to the project directory and run:
composer install

Create a .env file and configure the database, run:
cp .env.example .env

Generate the application key, run:
php artisan key:generate

Lastly, run migrations:
php artisan migrate

Start the developmental server with:
php artisan serve

Access the application at http://localhost:8000


# API Endpoints

"/shorten-url" [POST Request]
Shortens a given URL.

"/{short_code}"  [GET Request]
Redirects to the original URL from a given short URL.


Run feature tests with:
php artisan test


