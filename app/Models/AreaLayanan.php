<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaLayanan extends Model
{
    protected $fillable = [
        'kota',
        'tipe',
        'wa_url',
        'urutan',
        'aktif',
    ];

    protected $casts = [
        'aktif' => 'boolean',
    ];

    public function scopeAktif($query)
    {
        return $query->where('aktif', true)->orderBy('urutan');
    }

    public function scopeJersey($query)
    {
        return $query->where('tipe', 'jersey');
    }

    public function scopeHijab($query)
    {
        return $query->where('tipe', 'hijab');
    }
}