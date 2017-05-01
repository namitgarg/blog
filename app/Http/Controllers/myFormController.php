<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequest1;
use App\Http\Controllers\Controller;

class myFormController extends Controller
{
    //

 public function index()
 {


print("<h1> Form Controller </h1><br>");
return view('form');

 }
 function formSubmit(FormRequest1 $request)
{
print_r($request->name);
print("ssss");
// $this->validate($request,[
//    'name' => 'required|alpha'
// 	]);

 }


}
