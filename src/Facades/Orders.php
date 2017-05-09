<?php

namespace MystoreApiSdk\Facades;

class Orders
{
    /**
     * Handle dynamic static method calls into the method.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return app('Orders')->$method(...$parameters);
    }
}
