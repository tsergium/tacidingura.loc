<?php

class ApiController extends \BaseController
{
    protected $layout = 'layouts.master';

    public function index()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'product'
            ]
        ];

        return json_encode($products);
    }
}
