<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
  protected $fillable = [
      'id', 'name', 'email', 'descricao',
  ];
}
