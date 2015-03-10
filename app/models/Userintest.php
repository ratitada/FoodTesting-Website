<?php

class Userintest extends Eloquent {

	protected $table = 'userintest';
	protected $primaryKey = 'id';
	public static $unguarded = true;
	public  $timestamps = false;

}