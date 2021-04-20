
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',function () {
    return view('index'); /*index la ten views*/
});

Route::get('/hello',function () {
    return ('Hello!');
});
Route::get('/welcome',[WelcomeController::class,'Hello']);
// Route::get('/welcome1','WelcomeController@index'); /*khong thuc hien duoc*/
Route::view('/welcome2','index'); /*index la ten views*/
/*-------------------------------------------------------------------------------------------------------*/
/*rang buoc voi tham so truyen vao: gioi han cac quy tac bang method where*/
Route::get('/user/{name}',function($name){
	return ($name);
})->where('name','[A-Za-z]+');
Route::get('/user/{id}',function($id){
	return ($id);
})->where('id','[0-9]+');
/*tong hop 2 dieu kien tren*/
Route::get('/user/{id}/{name}',function($id,$name){
	return ("ID la: ".$id."<br>"."Toi ten la: ".$name);
})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
/*cach thuan tien hon*/
Route::get('/user/ID/{id}/name/{name}',function ($id,$name)
{
	return ("ID: ".$id."<br>"."Name is: ".$name);
})->wherenumber('id')->whereAlpha('name');
/*-------------------------------------------------------------------------------------------------------*/
/*tao Route tuong ung goi function index trong WelcomeController*/
Route::get('/post/category/{category}/post_id/{post_id}',[WelcomeController::class,'indexfunction'])->where(['category'=>'[A-Za-z]+','post_id'=>'[0-9]+']);
/*tao Controller chi voi Action duy nhat*/
Route::get('profile/{id}',ProfileController::class);
/*-------------------------------------------------------------------------------------------------------*/
/*Tao Response Objects*/
Route::get('/example/response',function()
{
	return response('Hello World',200)->header('Content-Type','text/plain');
	/*dung withHeaders de gan nhieu headers cung luc*/
	// return response($content)->withHeaders([
	// 	'Content-Type'=>$type,
	// 	'X-Header-One'=>'Header Value',
	// 	'X-Header-Two'=>'Header Value',
	// ]);
});


/*bai tap buoi 6*/
Route::view('/test','Form_Lesson6');

Route::resource(
	'posts' , PostController::class

);


/*test view*/
Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});