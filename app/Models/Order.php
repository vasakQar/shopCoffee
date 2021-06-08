<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;
//    use HasFactory;

//    protected $fillable = ['product_id','user_id','quantity','country','city','total_price','zip_code','address', 'status'];

    protected $guarded = [];
    public $timestamps = true;
    protected $hidden = ["deleted_at"];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function product(){
        return $this->belongsTo(Product::class);
    }
}
