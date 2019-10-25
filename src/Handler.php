<?php

namespace Envomer\API;

use Illuminate\Http\Request;

class Handler
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $model = $request->get('model');
    }

    public function getAll()
    {

    }

}
