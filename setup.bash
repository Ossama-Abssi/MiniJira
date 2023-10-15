#!/bin/bash

mv .env.example .env 
composer install
composer update
php artisan key:generate 
php artisan serve