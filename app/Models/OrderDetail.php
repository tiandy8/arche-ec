<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsTo('App\Models\Order' ,'id','order_id');
    }

    public function barang()
    {
        return $this->hasOne('App\Models\Product','id','barang_id');
    }


}
