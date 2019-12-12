<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDeServico extends Model
{
    protected $table = 'tipo_de_servico';

    protected $fillable = [
        'cod_servico',
        'nome_servico',
        'prioridade'
    ];

    
}
