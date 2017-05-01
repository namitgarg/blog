<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class simpletest extends Controller
{
    //
    public function testme()
    {
    	echo "s2w";
    	echo"<br/>";
      abort(404);
    	        $users = DB::select('select * from student_details ');

    	      //  print_r($users);
    	        $users2 = DB::connection('mysql')->select('select name from student_details ');
  // print_r($users2);
          $users3 = DB::table('student_details')->get();
         // print_r($users3);
 foreach ($users3 as $user) {
    // echo $user->ID;
    // echo $user->Name;
     echo "<br/>";
}


$users4= DB::table('student_details')->where('ID','>=','1')->get();
//print_r($users4);

foreach ($users4 as $values)
{
	echo $values->ID;
	echo"<br/>";
	echo $values->Name;
  echo"<br/>";
  echo"<br/>";
}

    }
}
