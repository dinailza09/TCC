<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    protected $table = "itenspedidos";

    protected $fillable = ['Product_id', 'user_id', 'order_id', 'price'];
}
