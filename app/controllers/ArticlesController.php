<?php

class ArticlesController extends \BaseController {
    protected $layout = 'layouts.master';
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pageName = 'Articles List';
        $results = Articles::orderBy('added', 'desc')->paginate(5);
        return View::make('articles.index', array('articles' => $results, 'pageName' => $pageName));
    }
}