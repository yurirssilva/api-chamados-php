<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';

    protected $fillable = [
        'id_produto',
        'nome_produto',
        'descricao',
        'quantidade'
    ];
    
}
