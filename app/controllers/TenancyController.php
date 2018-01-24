<?php

class TenancyController extends \BaseController {
    protected $layout = 'layouts.master';

    public function index()
    {
        $pageName = 'Tenancy List';
        $results = Tenancy::paginate(12);
        return View::make('tenancy.index', array('tenancy' => $results, 'pageName' => $pageName));
    }
}