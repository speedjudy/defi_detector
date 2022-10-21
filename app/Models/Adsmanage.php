<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adsmanage extends Model
{
    protected $table = 'ads';

    protected $fillable = [
        'image',
        'link',
        'level',
        'kind'
    ];
}
