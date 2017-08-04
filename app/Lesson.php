<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Abstracts\QueryFilters;

class Lesson extends Model
{
 	public function scopeFilter($query, $filters)
 	{
 		return $filters->apply($query);		
 	}
}
