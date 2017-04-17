<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class simpletest extends Controller
{
    //
    public function testme()
    {
    	echo "tested you";
    	        $users = DB::select('select * from student_details ');

    	        print_r($users);
    	        $users2 = DB::connection('m[ysql')->select('select  from student_details ');
   print_r($users2);

    }
}
