<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ControleHoras extends Model
{
    protected $table = 'controle_horas';

    protected $fillable = [
        'id_medico',
        'id_plantao',
        'horas_trabalhadas',
    ];

    public function medico()
    {
        return $this->belongsTo(Medicos::class, 'id_medico');
    }

    public function plantao()
    {
        return $this->belongsTo(Plantoes::class, 'id_plantao');
    }
}
