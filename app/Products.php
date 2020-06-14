<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table="products";
    protected $primaryKey="id";
    protected $fillable=[
        'title',
        'description',
        'images_url',
        'category_id',
        'is_featured',
        'price',
        'rating',
    ];
}
