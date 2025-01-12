<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'tickets',
        'payment_method',
        'special_requests',
        'card_title',
        'card_date',
        'card_price',
        'total_price',
    ];
}