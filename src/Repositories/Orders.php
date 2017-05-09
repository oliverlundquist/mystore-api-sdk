<?php

namespace MystoreApiSdk\Repositories;

class Orders
{
    /**
     * Insert order to store.
     *
     * @param  array  $data
     * @return array
     */
    public function create($data = []) {
        // make a atomic batch request here with Guzzle to the Mystore API
        // we could also have an environmental variable where we could allow
        // direct database access through the Eloquent model classes that are
        // in the Mystore API repository
        return $data;
    }
}
