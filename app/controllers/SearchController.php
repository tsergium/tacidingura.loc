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
        $query = Input::get('query');
        $results = Product::search($query)->get();
        View::share('seo_title', $pageName);

        return View::make('search.index', [
            'products' => $results,
            'pageName' => $pageName
        ]);
    }
}
