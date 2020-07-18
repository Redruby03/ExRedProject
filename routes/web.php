<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user', function () {
//     return "หน้า ";
// });

// Route::get('/uusseerr/{name}', function ($name) {
//     return "แมว $name";
// });

// Route::get('/pass/{num1}+{num2}', function ($num1, $num2) {
//     return $num1+$num2;
// });

// Route::get('/showdetail/{name}/{age}/{sting}', function ($name, $age, $sting) {
//     return "สวัสดี,$name คุณมีอายุ $age ปี และพูดว่า'$sting'";
// });

// Route::get('/', 'HomeController@index' );
// Route::get('/greeting{name}', 'HomeController@greeting');
// Route::get('/riri/{num1}+{num2}+{num3}','HomeController@cal');

Route::get('/users', 'UserController@index');
Route::get('/users/show/{id}', 'UserController@show');
Route::get('/users/update/{idupdate}','UserController@update');
