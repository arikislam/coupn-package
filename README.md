# Coupon Management Package

[![Packagist License](https://poser.pugx.org/fruitcake/php-cors/license.png)](http://choosealicense.com/licenses/mit/)

This package will manage coupons and also create api routes to manage coupons.

## Requirements
- - - -

This package can only use as a library. You can use it in your laravel framework using version 9 and above

## Installation
- - - -
* `composer require smariqislam/coupon`
* Publish config file using `php artisan vendor:publish --tag=coupon-config`
    * This will publish a config file to `config/coupon.php`
    * Set configuration according to system

```php

<?php
  return [
    'product_model'           => '\App\Models\Course', // your product model
    'product_primary_key'     => 'id', // product model primary key
    'product_display_column'  => 'name', //product model display name column
    'product_category_column' => 'course_category_id', //product model category name column or display column
    'product_price_column'    => 'price', //product model price column
    'category_model'          => '\App\Models\CourseCategory', // your product category model
    'category_primary_key'    => 'id', // product category primary key
    'category_display_column' => 'name',// product category name or display column
    'api_route_base_prefix'   => 'api', // set route prefixes
    'api_middlewares'         => ['auth:sanctum'], // set middlewares
    'per_page_data'           => 10, //optional 
  ];
```

* Run `php artisan migrate`

## Routes ##
- - - -
* https://documenter.getpostman.com/view/6533522/UzBtmPA5

## Facde Accesor ##
- - - -
|                 Method                 |               Params               |         Response         |
|:--------------------------------------:|:----------------------------------:|:------------------------:|
`Coupon::getCouponByCode($couponCode)` |           `coupon code`            | Coupon object / `false`  |
`Coupon::applyCouponToProduct($coupon, $productId)`    | `Coupon object`, `Your product id` | `false`/ `array` of data |       

### Developed By ###
- - - -
#### S M Ariq Islam #### 
#### +8801726036271 ####
#### arikislam321@gmail.com ####
