<?php

class User extends Eloquent
{
	protected $table = 'users';
	//protected $fillable = array('firstname', 'lastname', 'gender');
	protected $guarded = array();
}