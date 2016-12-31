<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class userrequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"txtUser"=>"required|unique:users,username",
			"txtPass"=>"required",
			"txtRePass"=>"required|same:txtPass",
			"txtEmail"=>"required"
		];

	}
	public function messages(){
			return [
				"txtUser.required"=>"vui lòng nhập tên đăng nhập",
				"txtUser.unique"=>"tên đăng nhập đã tồn tại",
				"txtPass.required"=>"vui lòng nhập password",
				"txtRePass.required"=>"vui lòng xác nhận password",
				"txtRePass.same"=>"mật khẩu không khớp",
				"txtEmail.required"=>"vui lòng nhập email"
			];
		}
}
