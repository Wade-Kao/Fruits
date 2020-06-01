<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListUser extends Model
{
    //    public $timestamps = false;
    // protected $table = 'user_list';
    // protected $primaryKey = 'UNo';
    public function branchlistusers()
    {
        return $this->hasMany(\App\BranchListUser::class, 'list_users_id');
        //  return $this->belongsTo(\App\BranchListUser::class);
    }
}
