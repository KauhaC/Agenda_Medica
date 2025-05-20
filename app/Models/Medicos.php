<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicos extends Model
{
    protected $table = 'medicos';
    protected $fillable = ['nome', 'cpf', 'contato', 'especializacao'];
}

?>
