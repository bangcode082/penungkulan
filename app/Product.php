<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{	
	protected $tables='products';
	protected $fillable = ['name','category_id', 'photo', 'description', 'price'];

	public function categories()
	{
		return $this->belongsTo('App\Category','category_id');
	}

	public function getCategoryListsAttribute()
	{
		return $this->categories->id;
	}
}

