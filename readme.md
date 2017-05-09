### Mystore API SDK

#### Install Package
```
composer require oliverlundquist/mystore-api-sdk
```

#### Usage
```PHP
<?php
// load composer dependencies
require_once __DIR__.'/../vendor/autoload.php';

// bootstrap Mystore API SDK
require_once __DIR__.'/../vendor/oliverlundquist/mystore-api-sdk/bootstrap/app.php';

// move classes into namespace
use MystoreApiSdk\Facades\Orders;

// Fire away!
Orders::create($data = []);
```
