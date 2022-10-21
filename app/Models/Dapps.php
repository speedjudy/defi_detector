<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dapps extends Model
{
    protected $table = 'dapps';
    
    protected $fillable = [
        'mining_group_url',
        'mining_group',
        'logo_url',
        'tg_group',
        'discode_link',
        'twitter_link',
        'audit',
        'contract',
        'kyc',
        'coin_token',
        'fees',
        'ages',
        'daily',
        'tvl',
        'tvl_24h',
        'level',
        'show_flag'
    ];
}
