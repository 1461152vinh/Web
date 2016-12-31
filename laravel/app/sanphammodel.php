<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class sanphammodel extends Model {

	protected $table ='sanpham';
	protected $fillable=['id','mact','masp','tensp','gia','chieckhau','hinhanh','thoidiemtao','view','dmsp_id'];
	public $timestamps=false;

}
