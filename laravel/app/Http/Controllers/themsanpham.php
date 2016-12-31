<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\sprequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\sanphammodel;
class themsanpham extends Controller {
	public function dssanpham()
	{
		$ds=DB::table('sanpham')->get();
		return view('themsp.cate_list',compact('ds'));
	}
	public function them(sprequest $request)
	{
		$sp=new sanphammodel;
		$sp->mact=$request->mact;
		$sp->masp=$request->masp;
		$sp->tensp=$request->tensp;
		$sp->gia=$request->gia;
		$sp->chieckhau=$request->chieckhau;
		$sp->hinhanh=$request->hinhanh;
		$sp->view=$request->view; 
		$sp->dmsp_id=$request->idmdm;
		$sp->save();
		return redirect()->route('admin.dssp')->with(['flash_level'=>'success','flash_message'=>'bạn đã thêm thành công']);
	}
	public function delete($id)
	{
		$sp=sanphammodel::find($id);
		$sp->delete($id);
		return redirect()->route('admin.dssp')->with(['flash_level'=>'success','flash_message'=>'bạn đã xóa thành công']);
	}
	public function edit($id)
	{
		$product=sanphammodel::findOrFail($id)->toArray();
		return view('themsp.cate_edit',compact('product'));
	}
	public function postedit(Request $request,$id)
	{
		$this->validate($request,
			["masp"=>"required"],
			["masp.required"=>"không để trống mã DMSP"]
			
			);
		$this->validate($request,
			["tensp"=>"required"],
			["tensp.required"=>"không để trống tên sản phẩm"]
			);
		$sp=sanphammodel::find($id);
		$sp->mact=$request->mact;
		$sp->masp=$request->masp;
		$sp->tensp=$request->tensp;
		$sp->gia=$request->gia;
		$sp->chieckhau=$request->chieckhau;
		$sp->hinhanh=$request->hinhanh;
		$sp->view=$request->view; 
		$sp->dmsp_id=$request->iddmsp;
		$sp->save();
		return redirect()->route('admin.dssp')->with(['flash_level'=>'success','flash_message'=>'bạn đã cập nhật thành công']);
	}

}
