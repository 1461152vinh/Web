<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class sprequest extends Request {

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
			'mact'=>'required|unique:sanpham,mact',
			'tensp'=>'required|unique:sanpham,tensp',
			'masp'=>'required'
		];
	}
	public function messages (){
		return [
			'mact.required'=>'vui lòng nhập mã chi tiết',
			'mact.unique'=>'mã chi tiết đã tồn tại',
			'tensp.required'=>'vui lòng nhập tên sản phẩm',
			'tensp.unique'=>'tên sản phẩm đã tồn tại',
			'masp.required'=>'vui lòng nhập mã dmsp'
		];
	}

}
