<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{	
	protected $tables='products';
	protected $fillable = ['name','category_id', 'photo','status', 'description', 'price'];

	public function categories()
	{
		return $this->belongsTo('App\Category','category_id');
	}

	public function getCategoryListsAttribute()
	{
		return $this->categories->id;
	}

	public static function statusList()
	{
		return [
		'active' => 'Tampilkan Produk',
		'nonactive' => 'Jangan Tampilkan Produk',
		'banner' => 'Jadikan Produk sebagai Banner Juga',
		];
	}

	public function getHumanStatusAttribute()
	{
		return static::statusList()[$this->status];
	}

	public static function allowedStatus()
	{
		return array_keys(static::statusList());
	}
}

