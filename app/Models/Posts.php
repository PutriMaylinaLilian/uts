<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['judul','category_id','content','gambar','slug'];

    public function category(){
    	return $this->belongsTo('App\Models\Category');


    }
}
