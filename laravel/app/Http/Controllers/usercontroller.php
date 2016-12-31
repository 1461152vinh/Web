<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\userrequest;
use Illuminate\Http\Request;
use App\usermodel;
use Hash;
class usercontroller extends Controller {
	public function formuser(){
		return view('themsp.user_add');
	}

	public function themuser(userrequest $request){
			$users=new  usermodel;
			$users->username=$request->txtUser;
			$users->password=Hash::make($request->txtPass);
			$users->email=$request->txtEmail;
			$users->level=$request->rdoLevel;
			$users->member_token=$request->_token;
			$users->save();
			return redirect()->route('admin.user.dsuser')->with(['flash_level'=>'success','flash_message'=>'thêm user thành công!!']);
		}
	public function dsuser(){
		$user=usermodel::select('id','username','level')->get();
		return view('themsp.user_list',compact('user'));
	}
	public function delete($id){
		$users=usermodel::find($id);
		$users->delete($id);
		return redirect()->route('admin.user.dsuser')->with(['flash_level'=>'success','flash_message'=>'xóa user thành công!!']);;
	}
	public function edit(){}
	public function postedit(){}

}
