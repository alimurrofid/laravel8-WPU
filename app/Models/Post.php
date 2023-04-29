<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category','author'];

    //satu post hanya memiliki satu category
    public function category() {
        return $this->belongsTo( Category::class );
    }

    // satu post hanya memiliki satu user
    public function author() {
        return $this->belongsTo( User::class ,'user_id');
    }
}
