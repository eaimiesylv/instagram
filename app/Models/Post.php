<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function images(){
        return $this->hasMany(Post_image::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
