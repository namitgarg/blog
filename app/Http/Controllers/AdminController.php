<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student_detail as nam;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    //
    public function dashboard()
    {

    	$users = DB::select('select * from student_details ');
    	
    	foreach($users as $values)
    	{
    		echo $values->Name ." --- ".$values->id;
    		echo "<br>";
    	}
   	    		echo "<hr>";
    	$sdetails= nam::all();
    	foreach ($sdetails as $values)
    	{
    		echo $values->id;
    		echo "<br>";
    	}
    	    		echo "<hr>";


$wdetails =nam::where('id','>','2')->get();

foreach ($wdetails as $values)
    	{
    		echo $values->id;
    		echo "<br>";
    	}
    	    		echo "p<hr>";

// delete functin test

$delete =nam::where('id','>','2')->first();
// foreach ($delete as $values)

// {
// 	print_r($values->id);
// }
print($delete->id);



    } // dashboard


    public function __construct()
    {
    	echo "Admin contructor run";

    }
}
