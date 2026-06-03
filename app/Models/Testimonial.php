<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'nama', 'jabatan', 'kota', 'isi',
        'bintang', 'featured', 'aktif', 'urutan'
    ];

    protected $casts = ['featured' => 'boolean', 'aktif' => 'boolean'];

    public function scopeAktif($query)
    {
        return $query->where('aktif', true)->orderBy('urutan');
    }
}