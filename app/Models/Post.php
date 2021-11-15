<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //fillable berarti field2 apa saja yang bisa di isi 
    // protected $fillable = ['title', 'excerpt', 'body'];
    //guarded berarti berikut field2 yg di tulis di bawah ini yang tidak bsia di isi,selain dibwah ini bisa
    protected $guarded = ['id'];
}
