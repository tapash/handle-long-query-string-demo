<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Abstracts\QueryFilters;
use App\Traits\Filterable;

class Lesson extends Model
{
 	use Filterable;
}
