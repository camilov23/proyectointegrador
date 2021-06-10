<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'producto';
    protected $primary_key = 'id_producto';
    protected $foreign_key_constraints = 'garantia_id_garantia';
    public $timestamps = false;
    protected $fillable = ['garantia_id_garantia','id_producto','nombre','precio_unitario','cantidad','marca','nacional'];
  
    public function pedido_detalle(){

        return $this->belongsTo('App\detalle_pedido');
    }
    
    }





