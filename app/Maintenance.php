<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    //
    public $table = "_maintenance";
    protected $fillable = [
        'date', 'type', 'description','status','cause','defect','treatment','id_tecn','id_equi'
    ];
}
