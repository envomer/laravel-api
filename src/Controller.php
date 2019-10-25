<?php

namespace Envomer\API;

use Illuminate\Http\Request;

class Controller extends \Illuminate\Routing\Controller
{
    /**
     * @var Handler
     */
    protected $handler;

    public function __construct(Handler $handler)
    {
        $this->handler = $handler;
    }

    public function index()
    {
        return $this->handler->getAll();
    }

    public function show($model, $id, Request $request)
    {
        return $this->handler->get($id);
    }
}
