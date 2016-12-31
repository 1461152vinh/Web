<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class searchsanpham extends Controller {

	public function search(Request $request)
	{
		$kq=$request->input('tkiem');
		$product=DB::table('sanpham')->where('tensp','like','%'.$kq.'%')->get();
		return view('search.kqsearch',compact('product'));

	}
}
