<?php
namespace App\Abstracts;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class QueryFilters
{
	protected $builder;

	protected $request;

	public function __construct(Request $request)
	{
		$this->request = $request;	
	}

    /**
     * main method
     * get all query request and check if the corresmponding 
     * method is exists
     * if found call that method and hook the query with builder object
     * return builder object
     */
    public function apply(Builder $builder)
    {
        $this->builder = $builder;
        foreach ($this->filters() as $name => $value) {
            if (! method_exists($this, $name)) {
                continue;
            }
            if (strlen($value)) {
                $this->$name($value);
            } else {
                $this->$name();
            }
        }
        return $this->builder;
    }

	public function filters()
	{
		return $this->request->all();
	}
}