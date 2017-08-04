<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use App\Filters\LessonFilters;

class LessonsController extends Controller
{
    public function show(LessonFilters $filters)
    {
    	// $lesson = (new Lesson())->newQuery();

    	// if(request()->exists('popular')) {
    	// 	$lesson->orderBy('views', 'acs');
    	// }

    	// return $lesson->get();
    	// 
    	
    	return Lesson::filter($filters)->get();
    	
    }
}
