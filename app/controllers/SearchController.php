<?php

class SearchController extends \BaseController
{
    protected $layout = 'layouts.tacidingura';

    public function index($searchTerm)
    {
        $pageName = 'Search Products';
        $results = Product::search($searchTerm)->get();
        View::share('seo_title', $pageName);

        return View::make('search.index', [
            'products' => $results,
            'pageName' => $pageName
        ]);
    }
}
