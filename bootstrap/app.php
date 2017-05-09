<?php

use Illuminate\Container\Container;
use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

// load composer dependencies (only if running as standalone package)
if (is_file(__DIR__.'/../vendor/autoload.php') === true) {
    require_once __DIR__.'/../vendor/autoload.php';
}

// load helpers
require_once __DIR__.'/../bootstrap/helpers.php';

// create app container
$app = Container::getInstance();

// make a early return if app is bootstrapped
if (app()->bound('bootstrapped')) {
    return $app;
}

// load .env file (try external first, then local)
try { (new Dotenv(__DIR__.'/../../../../'))->load(); } catch (InvalidPathException $e) {}
try { (new Dotenv(__DIR__.'/../'))->load(); } catch (InvalidPathException $e) {}

// add bindings for classes
$app->bind('Orders', function () { return new MystoreApiSdk\Repositories\Orders; });

// set bootstrapped flag
app()->instance('bootstrapped', true);

// return app container
return $app;
