<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'Items';
    // Add [title] to fillable property to allow mass assignment on [App\Post] edit錯誤加入下方指令

    protected $fillable = ['title'];
}
