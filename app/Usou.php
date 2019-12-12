<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usou extends Model
{
    protected $table = 'usou';

    protected $fillable = [
        'fk_produdo_id_produto',
        'fk_chamado_id',
        'quantidade'
    ];

    public function produtos(){
        return $this->hasMany(Produto::class, 'fk_produdo_id_produto', 'id_produto');
    }

    public function chamado(){
        return $this->belongsTo(Chamado::class, 'fk_chamado_id');
    }
}
