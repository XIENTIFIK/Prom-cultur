<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    protected $fillable=['nom','prenom','email','profession','telephone'];
}
