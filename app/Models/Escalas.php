<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escalas extends Model
{
    protected $table = 'escalas';
    protected $fillable = ['id_medico', 'id_plantao'];
}

?>