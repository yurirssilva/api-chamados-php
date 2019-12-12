<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $table = 'setor';

    protected $fillable = [
        'cod_setor',
        'nome_setor'
    ];

    public function funcionario(){
        return $this->belongsTo(Funcionario::class, 'fk_setor_cod_setor');
    }
    
}
