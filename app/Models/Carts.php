<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $table = "carts";
    protected $guarded = ['id','created_at', 'updated_at'];


    public function barang()
    {
        return $this->hasOne('App\Models\Product','id','barang_id');
    }
}
