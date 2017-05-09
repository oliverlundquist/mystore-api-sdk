<?php
// load composer dependencies
require_once __DIR__.'/../vendor/autoload.php';

// bootstrap Mystore API SDK
require_once __DIR__.'/../vendor/mystore/mystore-api-sdk/bootstrap/app.php';

// move classes into namespace
use MystoreApiSdk\Facades\Orders;

// Fire away!
Orders::create($data = []);
