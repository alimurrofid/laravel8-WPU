<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //satu post hanya memiliki satu category
    public function category() {
        return $this->belongsTo( Category::class );
    }
}
