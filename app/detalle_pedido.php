<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_pedido extends Model
{
    protected $fillable = ['id_pedido', 'id_producto' , 'cantidad'];
    public $timestamps = false;

    public function pedidos(){

        return $this->belongsTo('App\pedidos');
    
    }
    public function Productos(){
        
        return $this->belongsTo('App\producto');
    
    }
}