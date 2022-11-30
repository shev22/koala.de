<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'tracking_no',
        'fullname',
        'email',
        'phone',
        'address',
        'status_message',
        'payment_mode',
        'payment_id',
    ];

}
