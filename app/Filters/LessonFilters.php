<?php
namespace App\Filters;

use App\Abstracts\QueryFilters;

class LessonFilters extends QueryFilters
{
	
	/**
	 * find by popular
	 * @param  string $order /?popular
	 * @return object   Databse builder object
	 */
	public function popular($order = 'desc')
	{
		return $this->builder->orderBy('views', $order);
	}

	/**
	 * find by difficulty
	 * @param  string $level /?difficulty=advanced
	 * @return object        Database builder object
	 */
	public function difficulty($level)
    {
        return $this->builder->where('difficulty', $level);
    }

	/**
	 * find by lenth
	 * @param  string $length /?length
	 * @return object   Databse builder object
	 */
    public function length($length = 'asc')
    {
        return $this->builder->orderBy('length', $length);
    }
}