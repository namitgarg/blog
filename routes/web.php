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

/*
Database example
*/
Route::get('/simpletest7','simpletest@testme');


Route::get('/admintest','AdminController@dashboard');

/**
** Middle ware example
**/
Route::get('role',[
   'middleware' => 'Role:editor',
   'uses' => 'middlecontroller@index',
]);
Route::get('/foo/bar','UriController@index');

/**
**  view example
**/
Route::get('/register',function(){
   return view('register');
});


Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

/**
** cookie set
*/

Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');



/**
*  View data with variables

*/

Route::get('/test7', function(){

	$data=array("namit","garg");
   return view('test',['data'=>'hhh']);
});

/**
* Blade view examples
*/

Route::get('/testview', function()
{
$data=array("namit","garg","abc","def");
$data1="namitgarg";
$data2="hiii";
$age=26;
   return view('test')->with(array('data1'=>$data1,'data2'=>$data2,'age' =>$age,'DataArray'=>$data));
});

// Route::get('names', function()
// {
//     return array(
//       1 => "John",
//       2 => "Mary",
//       3 => "Steven"
//     );
// });


Route::get('/webnames', 'WebController@index');


Route::get('/webnames/{id}', 'WebController@singleuser');


Route::get('/webnames/push','WebController@pushuser');

Route::get('/webname','WebController@guzz_test');





Route::group(['middleware' => 'Role:editor'],function()
{

Route::get('photos',[
'uses'=> 'PhotoController@index',
	])->name('photo_test');

Route::post('photos',[
'uses'=> 'PhotoController@index',
	])->name('photo_test');




Route::get('photos/{id}',[
'uses'=> 'PhotoController@show',
	]);

Route::get('photos/{id}/edit',function($id)
{
echo $id;
return view('PhotoUser')->with(array('id'=>$id));

	});

Route::post('photos/{id}/edit/done',[
'uses' =>'PhotoController@edit',
	])->name('photo_done');

}); // route groopu ending


/**
carbon  testing 

**/
Route::get('carbon',[
'uses'=> 'CarbonController@index',
	]);

/**
Form testing 

**/
Route::get('formtest',[
'uses'=> 'myFormController@index',
'middleware' =>'web',
	]);


Route::post('formtest',[
'uses'=> 'myFormController@formSubmit',
'as' => 'f.submit',
'middleware' =>'web',
	]);




//ajax example
Route::get('ajax',function(){
   return view('message');
});
Route::post('getmsg','AjaxController@index');



Route::get('/facadeex', function(){
   return TestFacades::testingFacades();
});