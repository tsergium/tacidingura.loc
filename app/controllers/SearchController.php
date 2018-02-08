<?php

class SearchController extends \BaseController
{
    protected $layout = 'layouts.tacidingura';

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function index(Request $request)
    {
        $pageName = 'Search Products';
        $query = $request->input('query');
        $results = Product::search($query)->get();
        View::share('seo_title', $pageName);

        return View::make('search.index', [
            'products' => $results,
            'pageName' => $pageName
        ]);
    }
}
