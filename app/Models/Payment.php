<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'player_id',
        'tournament_id',
        'razorpay_order_id',
        'razorpay_payment_id',
        'razorpay_signature',
        'amount',
        'status',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id');
    }

   
    public function tournament()
    {
        return $this->belongsTo(Tournament::class, 'tournament_id');
    }
}
