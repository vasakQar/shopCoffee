<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
//    use HasFactory;

    protected $fillable = array('category_id', 'name', 'description', 'price', 'images');

    protected $guarded = array('images');

    protected $casts = [
        'images' => 'array'
    ];

//    public function getPriceAttribute()
//    {
//        dd(45475787);
//        return $this->price."78778778";
//    }
//
//    public function setPriceAttribute($value)
//    {
//        $this->attributes['price'] = 8;
//    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
