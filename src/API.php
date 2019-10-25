<?php

namespace Envomer\API;

class API
{
    /**
     * @var AbstractAPI[]
     */
    private $collection;

    public function add($name, $className)
    {
        if (isset($this->collection[$name])) {
            throw new \Exception('API with given name already exists');
        }
    }
}
