<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchListUser extends Model
{
    //
    // protected $table = 'user_branch_list';
    // protected $primaryKey = 'UNo';
    public function listusers()
    {
        return $this->hasMany(\App\ListUser::class);
        //  return $this->hasMany(\App\ListUser::class, 'UNo', 'UNo');
    }
}
