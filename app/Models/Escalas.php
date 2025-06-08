<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Medicos;
use App\Models\Plantoes;

class Escalas extends Model
{
    protected $table = 'escalas';
    protected $fillable = ['id_medico', 'id_plantao'];

    public function medico()
    {
        return $this->belongsTo(Medicos::class, 'id_medico');
    }

    public function plantao()
    {
        return $this->belongsTo(Plantoes::class, 'id_plantao');
    }
}



?>