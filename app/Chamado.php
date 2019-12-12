<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    protected $table = 'chamado';

    protected $fillable = [
        'descricao',
        'status',
        'fk_funcionario_matricula',
        'data_hora_abertura',
        'fk_tipo_de_servico_cod_servico'
    ];

    public function funcionario(){
        return $this->belongsTo(Funcionario::class, 'fk_funcionario_matricula');
    }

    public function resolve(){
        return $this->belongsTo(Chamado::class, 'fk_chamado_id');
    }

    public function usou(){
        return $this->belongsToMany(Usou::class);
    }
    public function tipoDeServico(){
        return $this->hasOne(TipoDeServico::class, 'fk_tipo_de_servico_cod_servico', 'cod_servico');
    }


}
