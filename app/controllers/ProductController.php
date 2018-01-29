<?php

class ProductController extends \BaseController
{
    protected $layout = 'layouts.master';

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pageName = 'Products List';
        $results = Product::paginate(12);

        return View::make('product.index', [
            'products' => $results,
            'pageName' => $pageName
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(!Auth::check()) {
            return Redirect::to('home');
        }

        return View::make('product.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return View::make('product.edit', array('product' => $product));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = [
            'name'		    => 'required',
            'newPrice'		=> 'required',
            'url'		    => 'required',
            'affiliateUrl'	=> 'required',
            'image'		    => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('product/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $product = new Product;
            $product->name          = Input::get('name');
            $product->oldPrice		= Input::get('oldPrice');
            $product->newPrice		= Input::get('newPrice');
            $product->description	= Input::get('description');
            $product->url		    = Input::get('url');
            $product->affiliateUrl  = Input::get('affiliateUrl');
            $product->image         = Input::get('image');
            $product->save();
            //DB::insert('insert into users (firstname, lastname, gender) values (?, ?)', array(Input::get('firstname'), Input::get('lastname'), Input::get('gender')));
            // redirect
            Session::flash('message', 'Successfully created product!');
            return Redirect::to('product');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = [
            'name'		    => 'required',
            'newPrice'		=> 'required',
            'url'		    => 'required',
            'affiliateUrl'	=> 'required',
            'image'		    => 'required',
        ];
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('product/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $product = Product::find($id);
            $product->name          = Input::get('name');
            $product->oldPrice		= Input::get('oldPrice');
            $product->newPrice		= Input::get('newPrice');
            $product->description	= Input::get('description');
            $product->url		    = Input::get('url');
            $product->affiliateUrl  = Input::get('affiliateUrl');
            $product->image         = Input::get('image');
            $product->save();

            // redirect
            Session::flash('message', 'Successfully updated product!');
            return Redirect::to('product');
        }
    }
}
