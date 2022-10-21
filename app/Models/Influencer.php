<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    protected $table = 'influencers';

    protected $fillable = [
        'name',
        'url',
        'telegram',
        'twitter',
        'youtube',
        'logo_url'
    ];
}
