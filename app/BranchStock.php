<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BranchStock extends Model
{
    //
    protected $table = 'branch_stocks';
    protected $fillable = ['list_stocks_id', 'list_branchs_id', 'bsqty', 'bsuser'];
}
