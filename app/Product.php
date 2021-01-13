<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [
    	'id'
    ];
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
             $model->slug = str_slug($model->name, '-') . '-' . rand(1,10);
        });
    }
    protected $enumCasts = [
        'type' => CategoryType::class,
        
    ];

    protected $casts = [
        'type' => 'int',
    ];

    public function scopefarmanimals($query)
    {
        return $query->where('type', 0);
    } 

     public function scopecompanionanimals($query)
    {
        return $query->where('type', 1);
    }
    public function scopetype($query, $type)
    {
        return $query->where('type', $type);
    }
     public function scopesanitation($query)
    {
        return $query->where('categories', 0);
    } 
     public function scopetop($query)
    {
        return $query->where('categories', 0);
    }   
}
