<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'layanan';
    protected $fillable = [
        'nama', 'tag', 'deskripsi', 'foto',
        'is_wide', 'checklist', 'urutan', 'aktif'
    ];

    protected $casts = [
        'checklist' => 'array',
        'is_wide'   => 'boolean',
        'aktif'     => 'boolean',
    ];

    public function scopeAktif($query)
    {
        return $query->where('aktif', true)->orderBy('urutan');
    }

    public function getFotoUrlAttribute(): ?string
    {
        return $this->foto ? asset('storage/' . $this->foto) : null;
    }
}