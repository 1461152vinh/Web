<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('test',function()
{
	return view('banhang.index');
});
Route::get('test1',function()
{
	return view('banhang.shopping-cart');
});
Route::get('loai_san_pham/{id}/{tenloai}','sanpham@loaisanpham');
Route::get('t','sanpham@loaisanpham');
Route::get('/','sanpham@xuatsanpham');
Route::get('chitietsanpham/{id}/{tenloai}','sanpham@chitietsanpham');
Route::get('contact',function()
	{
		return view('banhang.contact');
	});
Route::get('checkout',function()
	{
		return view('banhang.checkout');
	});
Route::get('login',function()
	{
		return view('banhang.login');
	});
Route::get('register',function()
	{
		return view('banhang.register');
	});
Route::get('shopping',function()
	{
		return view('banhang.shopping');
	});
Route::get('contact',function()
	{
		return view('banhang.contact');
	});
Route::get('/search','searchsanpham@search');
// tao group admin
Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
	{
		Route::get('themsp',function()
		{
			return view('themsp.cate_add');
		});
		Route::post('themdssp','themsanpham@them');
		Route::get('dssp',['as'=>'admin.dssp','uses'=>'themsanpham@dssanpham']);
		Route::get('deletesp/{id}',['as'=>'admin.deletesp','uses'=>'themsanpham@delete']);
		Route::get('editsp/{id}',['as'=>'admin.editsp','uses'=>'themsanpham@edit']);
		Route::post('editsp/{id}',['as'=>'admin.posteditsp','uses'=>'themsanpham@postedit']);	
		Route::group(['prefix'=>'user'],function()
			{
				Route::get('themuser','usercontroller@formuser');
				Route::post('themuser ','usercontroller@themuser');
				Route::get('dsuser',['as'=>'admin.user.dsuser','uses'=>'usercontroller@dsuser']);
				Route::get('deleteuser/{id}',['as'=>'admin.user.deleteuser','uses'=>'usercontroller@delete']);
				Route::get('edituser/{id}',['as'=>'admin.user.edit','uses'=>'usercontroller@edit']);
				Route::post('edituser/{id}',['as'=>'admin.user.posteditsp','uses'=>'usercontroller@postedit']);	
			});
	});
