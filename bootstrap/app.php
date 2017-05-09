<?php

// load composer dependencies
require_once __DIR__.'/../vendor/autoload.php';

// load helpers
require_once __DIR__.'/../bootstrap/helpers.php';

// create app container
$app = Illuminate\Container\Container::getInstance();

// make a early return if app is bootstrapped
if (app()->bound('bootstrapped')) {
    return $app;
}

// add bindings for classes
$app->bind('Orders', function () { return new MystoreApiSdk\Repositories\Orders; });

// set bootstrapped flag
app()->instance('bootstrapped', true);

// return app container
return $app;
