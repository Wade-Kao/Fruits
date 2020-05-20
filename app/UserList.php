<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{
    //    public $timestamps = false;
    protected $table = 'User_list';

    protected $primaryKey = 'UNo';
}
