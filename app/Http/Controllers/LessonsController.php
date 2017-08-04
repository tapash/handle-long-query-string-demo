<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonsController extends Controller
{
    public function show()
    {
    	$lessions = Lesson::all();
    	return $lessions;
    }
}
