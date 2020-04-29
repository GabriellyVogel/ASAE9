<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    function tipo_produtos(){
    	return $this->belongsTo('App\Produto', 'id_tipo', 'id');
    }

    function vendas(){
    	return $this->belongsToMany('App\Produto', 'produtos_vendas', 'id_produto', 'id_venda')
    	->withPivot(['quantidade', 'subtotal'])->withTimestamps();
    }
}