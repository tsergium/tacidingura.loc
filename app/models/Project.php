<?php

class Project extends Eloquent
{
	protected $table = 'projects';
	protected $fillable = array('name', 'description');
	//protected $guarded = array();
}