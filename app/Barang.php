<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $guarded = ['id'];

    public function pesanan(){
    	return $this->belongsTo('App\Pesanan');
    }
}
