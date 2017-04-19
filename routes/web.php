<?php

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

Route::get('/simpletest7','simpletest@testme');


Route::get('/admintest','AdminController@dashboard');


Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'middlecontroller@index',
]);
Route::get('/foo/bar','UriController@index');

/**
**/
Route::get('/register',function(){
   return view('register');
});
Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));


Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');

Route::get('/test7', function(){

	$data=array("namit","garg");
   return view('test',['data'=>'hhh']);
});

Route::get('/testview', function()
{
$data=array("namit","garg");
   return view('test')->with('data',$data);

});
