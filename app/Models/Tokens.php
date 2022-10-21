<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tokens extends Model
{
    protected $table = 'tokens';

    protected $fillable = [
        'name',
        'chain',
        'audit',
        'contract',
        'kyc',
        'chart',
        'coin',
        'market_cap',
        'price',
        'change_24h',
        'show_flag',
        'level',
        'website',
        'presale_buy',
        'telegram',
        'discord',
        'twitter',
        'launch'
    ];
}