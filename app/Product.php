<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['name','brand','CPU','cpudetail','RAM','ramdetail','GPU','gpudetail','OS','storage','price','image','quantity','categoryID'];

    public function category(){

        return $this->belongTo('App\Category'); 

    }
}
