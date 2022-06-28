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