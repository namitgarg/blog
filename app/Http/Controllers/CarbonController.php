<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CarbonController extends Controller
{
    //
    public function index()
    {    	$dtToronto = Carbon::createFromDate(2012, 1, 1, 'America/Toronto');
$dtVancouver = Carbon::createFromDate(2012, 1, 1, 'America/Vancouver');

echo $dtVancouver->diffInHours($dtToronto); // 3

$now = Carbon::now();
echo $now;                               // 2016-06-24 15:18:34
$today = Carbon::today();
echo $today;                             // 2016-06-24 00:00:00
$tomorrow = Carbon::tomorrow('Europe/London');
echo $tomorrow;                          // 2016-06-25 00:00:00
$yesterday = Carbon::yesterday();
echo $yesterday;  





    	die;
    }
}
