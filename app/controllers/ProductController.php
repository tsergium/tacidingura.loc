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
        $results = Products::paginate(12);

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
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $rules = array(
            'name'		    => 'required',
            'newPrice'		=> 'required',
            'url'		    => 'required',
            'affiliateUrl'	=> 'required',
            'image'		    => 'required',
        );
        $validator = Validator::make(Input::all(), $rules);
        // process the mata
        if ($validator->fails()) {
            return Redirect::to('user/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $user = new User;
            $user->name         = Input::get('name');
            $user->newPrice		= Input::get('newPrice');
            $user->url		    = Input::get('url');
            $user->affiliateUrl = Input::get('affiliateUrl');
            $user->image        = Input::get('image');
            $user->save();
            //DB::insert('insert into users (firstname, lastname, gender) values (?, ?)', array(Input::get('firstname'), Input::get('lastname'), Input::get('gender')));
            // redirect
            Session::flash('message', 'Successfully created product!');
            return Redirect::to('product');
        }
    }
}
