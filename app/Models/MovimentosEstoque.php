<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MovimentosEstoque extends Model
{
    protected $table = 'movimentos_estoque';

    protected $fillable = ['produto_id', 'quantidade', 'valor', 'tipo', 'empresa_id'];

    protected $with = ['produto'];

    public function produto()
    {
        return  $this->belongsTo('App\Models\Produto');
    }

    public function saldo()
    {
        return $this->MorphOne('App\Models\Saldo', 'movimento');
    }
}
