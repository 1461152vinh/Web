<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class usermodel extends Model {

	protected $table='users';
	protected $fillable=['id','username','password','level','member_token'];
	public $timestamps=false;
}