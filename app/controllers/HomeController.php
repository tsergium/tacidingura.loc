<?php

class HomeController extends \BaseController {
	protected $layout = 'layouts.tacidingura';

	public function index()
	{
        $pageName = 'Articles List';
//        $result = DB::table('articles')
//            ->join('video', 'users.id', '=', 'contacts.user_id')
//            ->select('users.id', 'contacts.phone', 'orders.price')
//            ->where()
//            ->get();
        $results = Articles::orderBy('added', 'desc')->remember(10)->paginate(5);
        View::share('seo_title', $pageName);
        return View::make('home.index', array('articles' => $results, 'pageName' => $pageName));
	}
}