<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSetting extends Model
{
    protected $fillable = [
        'eyebrow',
        'title_line1',
        'title_line2',
        'title_line3',
        'description',
        'btn1_label',
        'btn1_url',
        'btn2_label',
        'btn2_url',
        'btn3_label',
        'btn3_url',
    ];
}
