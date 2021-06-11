<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = "products";

    protected $guarded = [];


    protected $appends = ["thumbs"];

    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'product_name'
            ]
        ];
    }


    public function categories()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }



    public function images()
    {
        return $this->morphMany("App\Images","imageable");
    }

    public function getThumbsAttribute()
    {
        $images = asset("uploads/thumb_".$this->images()->first()->name);
        return '<img src="' .$images.'" class="img-thumbnail" width="100" />';
    }
    public function user(){
   // disini kita katakan bahwa setiap post hanya akan dimiliki oleh 1 user
   // keterangan: itu UserModel sesuaikan dengan nama MODEL USER yang agan gunakan
   return $this->belongsTo('App\User');
}


}