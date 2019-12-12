<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resolve extends Model
{
    protected $table = 'resolve';

    protected $fillable = [
        'fk_funcionario_matricula',
        'fk_chamado_id',
        'descricao_solucao',
        'data_hora_solucao',
        'data_hora_vinculo',
    ];

    public function chamado(){
        return $this->belongsTo(Chamado::class, 'fk_chamado_id');
    }

    public function funcionario(){
        return $this->belongsTo(Funcionario::class, 'fk_funcionario_matricula');
    }
}
