<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

First of all let's clone the project:
~~~
git clone git@github.com:EnsinioOrg/ensinio-back-api.git
git checkout develop
~~~

With composer and PHP ^8.1 configured on your machine:
~~~
composer install
~~~

If the installation has not copied the env.example file, copy it and rename it to .env only and run:
~~~
php artisan key:generate
~~~

Here I am using SQLITE to make the database configuration easier, but to make this possible
1. Create a database.sqlite file inside the database folder;
2. Paste the absolute path in the .env file under the DB_DATABASE key;
3. Lastly run:
~~~
php artisan migrate
~~~

## About the propouse
The idea of ​​the project is to show how an example of folders would look if the Repository and Service patterns were implemented. Both are independent of each other, but the proposal here is to use them together. [These diagrams](https://drive.google.com/file/d/1Y8yl1dg2t7PeJR1CbJbr-2FHq5YvUL41/view) represent what is being proposed here: 

- MVC architecture:

- Service & Repository Pattern:

- MVC + SRP (Service & Repository Pattern):

- Folder layout:

### Api Documentation

- **[Postman](https://documenter.getpostman.com/view/8987461/2s93eR5GL8)**
