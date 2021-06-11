<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id_producto';
    protected $foreignkey = ['garantia_id_garantia'];
    public $timestamps = false;
    protected $fillable = ['garantia_id_garantia','nombre','precio_unitario','cantidad','marca','nacional'];
  
  
    
    }





