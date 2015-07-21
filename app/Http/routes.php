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
use App\User;

Route::get('/', [
		'as'   => 'index',
		'uses' => 'HomeController@index'
	]);

Route::get('/services', [
		'as'   => 'services',
		'uses' => 'HomeController@services'
	]);

Route::get('/contacts', [
		'as'   => 'contacts',
		'uses' => 'HomeController@contacts'
	]);

Route::get('/gallery', [
		'as'  => 'gallery',
		'uses' => 'HomeController@gallery'
	]);

Route::get('/gallery/{id}', [
		'as'  => 'gallery_show',
		'uses' => 'HomeController@gallery_show'
	]);

//admin
Route::group( ['before' => 'check-login'], function(){

Route::get('/admin/category', [
		'as'  => 'category.index',
		'uses' => 'CategoryController@index'
	]);

Route::get('/admin/category/create', [
		'as'  => 'category.create',
		'uses' => 'CategoryController@create'
	]);

Route::post('/admin/category/create', [
		'as'  => 'category.store',
		'uses' => 'CategoryController@store'
	]);

Route::get('/admin/category/{id}', [
		'as'  => 'category.show',
		'uses' => 'CategoryController@show'
	]);

Route::get('/admin/category/{id}/edit', [
		'as'  => 'category.edit',
		'uses' => 'CategoryController@edit'
	]);

put('/admin/category/{id}', [
		'as'  => 'category.update',
		'uses' => 'CategoryController@update'
	]);

delete('/admin/category/{id}', [
		'as'  => 'category.destroy',
		'uses' => 'CategoryController@destroy'
	]);


Route::get('/admin/services', [
		'as'  => 'services.index',
		'uses' => 'ServicesController@index'
	]);

Route::get('/admin/services/create', [
		'as'  => 'services.create',
		'uses' => 'ServicesController@create'
	]);

post('/admin/services', [
		'as'  => 'services.store',
		'uses' => 'ServicesController@store'
	]);

Route::get('/admin/services/{id}', [
		'as'  => 'services.show',
		'uses' => 'ServicesController@show'
	]);

Route::get('/admin/services/{id}/edit', [
		'as'  => 'services.edit',
		'uses' => 'ServicesController@edit'
	]);

put('/admin/services/{id}', [
		'as'  => 'services.update',
		'uses' => 'ServicesController@update'
	]);

delete('/admin/services/{id}', [
		'as'  => 'services.destroy',
		'uses' => 'ServicesController@destroy'
	]);

Route::get('/admin/gallery', [
		'as'  => 'gallery.index',
		'uses' => 'GalleryController@index'
	]);

Route::get('/admin/gallery/create', [
		'as'  => 'gallery.create',
		'uses' => 'GalleryController@create'
	]);

post('/admin/gallery', [
		'as'  => 'gallery.store',
		'uses' => 'GalleryController@store'
	]);

Route::get('/admin/gallery/{id}', [
		'as'  => 'gallery.show',
		'uses' => 'GalleryController@show'
	]);

Route::get('/admin/gallery/{id}/edit', [
		'as'  => 'gallery.edit',
		'uses' => 'GalleryController@edit'
	]);

put('/admin/gallery/{id}', [
		'as'  => 'gallery.update',
		'uses' => 'GalleryController@update'
	]);

delete('/admin/gallery/{id}', [
		'as'  => 'gallery.destroy',
		'uses' => 'GalleryController@destroy'
	]);

//user

Route::group(array("prefix"=>"check"),function(){
	Route::post("check-username",function(){
		if(User::check_username(Input::get("username")))
			return "true";
		else return "false";
	});
	Route::post("check-email",function(){
		if(User::check_email(Input::get("email")))
			return "true";
		else return "false";
	});
});

Route::filter("check-login",function(){
	if(!Session::has("logined"))
		return Redirect::to("login");
});
Route::get("edit-profile",array("before"=>"check-login",function(){
	return View("edit-profile");
}));
Route::get("register",function(){
	if(Session::has("logined"))
		return Redirect::to('edit-profile');
	//Nếu tồn tại session đăng nhập sẽ trả về edit-profile
	return View("register");
});
Route::post("register",function(){
	$rules=array(
		"username"=>"required|min:3",
		"password"=>"required|min:6",
		"email"=>"required|email");

		$user=new User();
		$user->username=Input::get("username");
		$user->password=md5(sha1(Input::get("password")));
		$user->email=Input::get("email");
		$user->save();
		Session::put("register_success",Input::get('username')." đã đăng ký thành công");
		return Redirect::to("login");

});

}); //end cua group ne

Route::get("login",function(){
	if(Session::has("logined"))
		return Redirect::to('edit-profile');
	//Nếu tồn tại session đăng nhập sẽ trả về edit-profile
	return View("login");
});
Route::post("login",function(){
	if(User::check_login(Input::get("user_input"),md5(sha1(Input::get("password")))))
	{
		//Đăng nhập thành công
		Session::put("logined","true");
		//Tạo session login
		return Redirect::to("/admin/category");
	}
	else return View("login")->with("error_message","Tên đăng nhập hoặc mật khẩu không đúng");
	//Thông báo lõi
});

Route::get("logout",function(){
	Session::forget("logined");
	//Xóa session đăng nhập
	return Redirect::to("login");
});



Route::group(array("prefix"=>"check"),function(){
	Route::post("check-username",function(){
		if(User::check_username(Input::get("username")))
			return "true";
		else return "false";
	});
	Route::post("check-email",function(){
		if(User::check_email(Input::get("email")))
			return "true";
		else return "false";
	});
});

