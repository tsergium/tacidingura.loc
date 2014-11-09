<?php

class Task extends Eloquent
{
	protected $table = 'tasks';
	protected $fillable = array('title', 'description');
	//protected $guarded = array();
}