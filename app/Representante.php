<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table = 'representantes';
    protected $fillable = array('nome', 'telefone', 'email', 'foto', 'cidade', 'estado');
}
