<?php

namespace App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'email',
        'password',
    ];

    public function orderByUser()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }
}
