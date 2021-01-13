<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
             $model->slug = str_slug($model->name, '-') . '-' . rand(1,10);
        });
    }
}
