<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantoes extends Model
{
    protected $table = 'plantoes';
    protected $fillable = ['data_inicio', 'data_fim', 'especializacao'];

    protected $casts = [
    'data_inicio' => 'datetime',
    'data_fim' => 'datetime',
];

    public function escalas()
    {
        return $this->hasMany(Escala::class, 'id_plantao');
    }
}

?>
