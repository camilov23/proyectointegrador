<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','nombre','marca','cantidad','precio','nacional'];
    
    public function detalle_pedido(){
        
        return $this->hasMany('App\detalle_pedido');
    
    }
}
