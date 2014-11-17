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
        $results = Articles::orderBy('added', 'desc')->remember(10)->paginate(5);
        View::share('seo_title', $pageName);
        return View::make('articles.index', array('articles' => $results, 'pageName' => $pageName));
    }

    public function show($id)
    {
        $article = Articles::find($id);
        if(!$article){}

        $pageName = $article->name;
        View::share('seo_title', $pageName);

        return View::make('articles.show', array('article' => $article, 'pageName' => $pageName));
    }
}