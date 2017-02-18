<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['title', 'parent_id'];

	public function childs()
	{
		return $this->hasMany('App\Category', 'parent_id');
	}

	public function parent()
	{
		return $this->belongsTo('App\Category', 'parent_id');
	}
	public function products()
	{
		return $this->hasMany('App\Product');
	}

	public static function boot()
	{
		parent::boot();
		static::deleting(function($model) {
// remove relations to products
			foreach ($model->childs as $child) {
				$child->parent_id = 0;
				$child->save();
			}
		});
	}

	public function scopeNoParent($query)
	{
		return $this->where('parent_id', 0);
	}

	public function hasParent()
	{
		return $this->parent_id > 0;
	}
	public function hasChild()
	{
		return $this->childs()->count() > 0;
	}
}
