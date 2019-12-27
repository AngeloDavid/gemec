<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    //
    public $table = "_collaborator";
    protected $fillable = [
         'name', 'cargo','area','status'

        ];


}
