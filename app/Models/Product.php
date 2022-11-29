<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    public function pesanan()
    {
        return $this->belongsTo('App\Models\OrderDetail' ,'id','barang_id');
    }

}
