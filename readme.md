## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## NoSunset Information

WebSite has been built on laravel's PHP framework. Css Framework is Bootstrap 3. Javascript Library is Jquery 1.11.x.

`public` folder contains css/js. Specific files are `css/all.css`, `js/car.js`

Following the MVC structure,

Controllers are found at `App/http/controllers`, more specifically the `CarController.php` (RESTful controller).

Models are found at `App/Models`:

Model for interacting with *cars* table is at `App/Models/Db/Car.php`, using Laravel's own ORM (Eloquent).
Model for interacting with the DMR web service ist at `App/Models/Webservice/DmrServiceclient`. (Note that an auto-generated soap client is found at `App/Models/SoapClient`)

Views are found at `Resources/Views`.
`Resources/Views/car.blade.php` displays the homepage where the user can search by the vehicle's registration number.

Syntax of view is of *Blade* format (Laravel's own view syntax)

An online playground will be setup online very soon, on AWS itself.


