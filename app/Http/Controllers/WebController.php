<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\RequestException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Http\Controllers\Response;
use ZipCode;
class WebController extends Controller
{
    //

 function index ()
 {




  $users3 = DB::connection('mysql')->table('student_details')->get();
foreach($users3 as $values)
{
	$userdetails['name'][]=$values->Name;
 	}
return $userdetails;

}

function singleuser($uid)
{
	  $users3 = DB::connection('mysql')->table('student_details')->where('id',$uid)->get();

foreach($users3 as $values)
{
	//$userdetails['name'][]=$values->Name;
}
//return $userdetails;


}


function guzz_test()
{
$client= new Client();
 $response = $client->get('http://localhost/blog/public/webnames');
 return $response;
}



}
