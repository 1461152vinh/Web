<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class sanpham extends Controller {

	public function loaisanpham($id)
	{
		  $product=DB::table('sanpham')->select('id','tensp','hinhanh','gia','dmsp_id')->where ('dmsp_id',$id)->get();
		  $dmsp=DB::table('danhmucsanpham')->select('parent_id')->where('id',$product[0]->dmsp_id)->get();
		  $menu=DB::table('danhmucsanpham')->select('id','tensp','parent_id','tenspc')->where('parent_id',$dmsp[0]->parent_id)->get();
		  $lastest=DB::table('sanpham')->select('id','tensp','gia','hinhanh')->take(3)->get();
		  $name=DB::table('danhmucsanpham')->select('tensp')->where('id',$id)->first();
		return view('banhang.category',compact('product','menu','lastest','name'));
	}
	public function xuatsanpham()
	{
		$spham =DB::table('sanpham')->select('id','tensp','gia','chieckhau','hinhanh')->skip(0)->take(4)->get();
		return view('banhang.index',compact('spham'));
	}
	public function chitietsanpham($id)
	{
		$detail=DB::table('sanpham')->where('id',$id)->first();
		$image=DB::table('hinhsanpham')->select('id','hinhanh')->where('idsp',$id)->get();
		return view('banhang.product',compact('detail','image'));
	}
	public function dssanpham()
	{
		$ds=DB::table('sanpham')->get();
		return view('themsp.cate_list',compact('ds'));
	}
	
}
