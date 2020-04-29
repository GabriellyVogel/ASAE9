<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    protected $table = 'tipo_produtos';
    protected $primaryKey = 'id';

    function produtos(){
    	return $this->hasMany('App\Produto', 'id_tipo', 'id');
    }
}
