<?php

class ApiController extends \BaseController
{
    const TOKEN = "6a3e4cb7-a834-4616-44c2-b35b603d1b58";

    public function fetchProducts()
    {
        $products = Products::paginate(12);

        return json_encode($products);
    }

    public function createProduct()
    {

    }
}
