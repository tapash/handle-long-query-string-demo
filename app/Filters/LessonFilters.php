<?php
namespace App\Filters;

use App\Abstracts\QueryFilters;

class LessonFilters extends QueryFilters
{
	/**
	 * add methods as much as you can for query strings
	 * like: /?popular&difficulty=advanced&length
	 * @param  string $order [description]
	 * @return [type]        [description]
	 */
	
	public function popular($order = 'desc')
	{
		return $this->builder->orderBy('views', $order);
	}

	public function difficulty($level)
    {
        return $this->builder->where('difficulty', $level);
    }

    public function length($order = 'asc')
    {
        return $this->builder->orderBy('length', $order);
    }
}