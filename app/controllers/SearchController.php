<?php

class SearchController extends \BaseController
{
    protected $layout = 'layouts.tacidingura';

    /**
     * @return mixed
     */
    public function index()
    {
        $pageName = 'Search Products';
        $results = Product::where('name', 'like', '%' . Input::get('query') . '%')->paginate(12);
        View::share('seo_title', $pageName);

        return View::make('search.index', [
            'products' => $results,
            'pageName' => $pageName
        ]);
    }
}
