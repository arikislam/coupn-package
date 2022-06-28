# Coupon Management Package

[//]: # ()
[//]: # ([![Unit Tests]&#40;https://github.com/fruitcake/php-cors/actions/workflows/run-tests.yml/badge.svg&#41;]&#40;https://github.com/fruitcake/php-cors/actions&#41;)

[//]: # ([![PHPStan Level 9]&#40;https://img.shields.io/badge/PHPStan-Level%209-blue&#41;]&#40;https://github.com/fruitcake/php-cors/actions&#41;)

[//]: # ([![Code Coverage]&#40;https://img.shields.io/badge/CodeCoverage-100%25-brightgreen&#41;]&#40;https://github.com/fruitcake/php-cors/actions/workflows/run-coverage.yml&#41;)

[//]: # ([![Packagist License]&#40;https://poser.pugx.org/fruitcake/php-cors/license.png&#41;]&#40;http://choosealicense.com/licenses/mit/&#41;)

[//]: # ([![Latest Stable Version]&#40;https://poser.pugx.org/fruitcake/php-cors/version.png&#41;]&#40;https://packagist.org/packages/fruitcake/php-cors&#41;)

[//]: # ([![Total Downloads]&#40;https://poser.pugx.org/fruitcake/php-cors/d/total.png&#41;]&#40;https://packagist.org/packages/fruitcake/php-cors&#41;)

[//]: # ([![Fruitcake]&#40;https://img.shields.io/badge/Powered%20By-Fruitcake-b2bc35.svg&#41;]&#40;https://fruitcake.nl/&#41;)

[//]: # ()
[//]: # (Library and middleware enabling cross-origin resource sharing for your)

[//]: # (http-{foundation,kernel} using application. It attempts to implement the)

[//]: # ([W3C Recommendation] for cross-origin resource sharing.)

[//]: # ()
[//]: # ([W3C Recommendation]: http://www.w3.org/TR/cors/)

[//]: # ()
[//]: # (> Note: This is a standalone fork of https://github.com/asm89/stack-cors and is compatible with the options for CorsService.)

[//]: # (## Installation)

[//]: # ()
[//]: # (Require `fruitcake/php-cors` using composer.)

[//]: # ()
[//]: # (## Usage)

[//]: # ()
[//]: # (This package can be used as a library. You can use it in your framework using:)

[//]: # ()
[//]: # ( - [Stack middleware]&#40;http://stackphp.com/&#41;: https://github.com/asm89/stack-cors)

[//]: # ( - [Laravel]&#40;https://laravel.com&#41;: https://github.com/fruitcake/laravel-cors)

[//]: # ( )
[//]: # ()
[//]: # (### Options)

[//]: # ()
[//]: # (| Option                 | Description                                                | Default value |)

[//]: # (|------------------------|------------------------------------------------------------|---------------|)

[//]: # (| allowedMethods         | Matches the request method.                                | `[]`          |)

[//]: # (| allowedOrigins         | Matches the request origin.                                | `[]`          |)

[//]: # (| allowedOriginsPatterns | Matches the request origin with `preg_match`.              | `[]`          |)

[//]: # (| allowedHeaders         | Sets the Access-Control-Allow-Headers response header.     | `[]`          |)

[//]: # (| exposedHeaders         | Sets the Access-Control-Expose-Headers response header.    | `[]`          |)

[//]: # (| maxAge                 | Sets the Access-Control-Max-Age response header.           | `0`           |)

[//]: # (| supportsCredentials    | Sets the Access-Control-Allow-Credentials header.          | `false`       |)

[//]: # ()
[//]: # (The _allowedMethods_ and _allowedHeaders_ options are case-insensitive.)

[//]: # ()
[//]: # (You don't need to provide both _allowedOrigins_ and _allowedOriginsPatterns_. If one of the strings passed matches, it is considered a valid origin. A wildcard in allowedOrigins will be converted to a pattern.)

[//]: # ()
[//]: # (If `['*']` is provided to _allowedMethods_, _allowedOrigins_ or _allowedHeaders_ all methods / origins / headers are allowed.)

[//]: # ()
[//]: # (> Note: Allowing a single static origin will improve cacheability.)

[//]: # ()
[//]: # (### Example: using the library)

[//]: # ()
[//]: # (```php)

[//]: # (<?php)

[//]: # ()
[//]: # (use Fruitcake\Cors\CorsService;)

[//]: # ()
[//]: # ($cors = new CorsService&#40;[)

[//]: # (    'allowedHeaders'         => ['x-allowed-header', 'x-other-allowed-header'],)

[//]: # (    'allowedMethods'         => ['DELETE', 'GET', 'POST', 'PUT'],)

[//]: # (    'allowedOrigins'         => ['http://localhost', 'https://*.example.com'],)

[//]: # (    'allowedOriginsPatterns' => ['/localhost:\d/'],)

[//]: # (    'exposedHeaders'         => ['Content-Encoding'],)

[//]: # (    'maxAge'                 => false,)

[//]: # (    'supportsCredentials'    => false,)

[//]: # (]&#41;;)

[//]: # ()
[//]: # ($cors->addActualRequestHeaders&#40;Response $response, $origin&#41;;)

[//]: # ($cors->handlePreflightRequest&#40;Request $request&#41;;)

[//]: # ($cors->isActualRequestAllowed&#40;Request $request&#41;;)

[//]: # ($cors->isCorsRequest&#40;Request $request&#41;;)

[//]: # ($cors->isPreflightRequest&#40;Request $request&#41;;)

[//]: # (```)

[//]: # ()
[//]: # (## License)

[//]: # ()
[//]: # (Released under the MIT License, see [LICENSE]&#40;LICENSE&#41;.)

[//]: # ()
[//]: # (> This package is split-off from https://github.com/asm89/stack-cors and developed as stand-alone library since 2022)
