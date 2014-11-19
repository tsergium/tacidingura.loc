<?php

class HomeController extends \BaseController {
	protected $layout = 'layouts.tacidingura';

	public function index()
	{
        $pageName = 'Articles List';
        $results = Articles::orderBy('added', 'desc')->remember(10)->paginate(10);
        View::share('seo_title', $pageName);
        return View::make('home.index', array('articles' => $results, 'pageName' => $pageName));
	}
}