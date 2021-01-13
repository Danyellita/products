<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [
    	'id'
    ];

    public function products()
    {
    	 return $this->hasMany(Product::class);
    }

     protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
             $model->slug = str_slug($model->name, '-') . '-' . rand(1,10);
        });
    }
}
