<?php

if (! function_exists('app')) {
    /**
     * Get the available container instance.
     *
     * @param  string  $make
     * @return mixed
     */
    function app($make = null)
    {
        if (is_null($make)) {
            return Illuminate\Container\Container::getInstance();
        }

        return Illuminate\Container\Container::getInstance()->make($make);
    }
}
