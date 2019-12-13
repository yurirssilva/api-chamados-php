<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';

    protected $fillable = [
        'matricula',
        'nome_funcionario',
        'tipo',
        'fk_setor_cod_setor'
    ];

    public function setores(){
        return $this->hasMany(Setor::class, 'fk_setor_cod_setor', 'cod_setor');
    }

    public function chamados(){
        return $this->hasMany(Chamado::class, 'fk_funcionario_matricula', 'matricula');
    }
    
}
