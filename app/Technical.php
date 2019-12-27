<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technical extends Model
{
    //
    public $table = "_technical";
    protected $fillable = [
        'username', 'password', 'name','rol','status'
    ];
}
