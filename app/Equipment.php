<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    //
    public $table = "_equipment";
    protected $fillable = [
        'marca', 'serie', 'description','CPU','RAM','DISK','ano','color',
        'SO','status','id_type','id_colla'
    ];
}
