# Laravel Short URL Service

This project implements a URL shortening service built with Laravel. It allows users to shorten long URLs and provides functionality to redirect shortened URLs to their original destinations.


# Explanation

My chosen data structure is a relational database table. This ensures efficient storage and retrieval of URLs, scalability and uniqueness for the short URLs. Each URL record in the database includes the full original URL and a unique, randomly generated alphanumeric string. To ensure the uniqueness of the short URLs, they are generated using substr(md5($request->original_url . microtime()), 0, 6), which ensures high uniqueness by combining the original URL and a microsecond timestamp with md5 hashing. The short_code column is also marked as unique in the database schema thus my chosen data structure also actively prevents duplicates and ensures the uniqueness of the short URLs. 



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


