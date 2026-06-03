<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceTier extends Model
{
    protected $fillable = [
        'service',
        'min_qty',
        'discount_pct',
    ];

    protected $casts = [
        'min_qty'      => 'integer',
        'discount_pct' => 'decimal:2',
    ];

    /**
     * Ambil diskon yang berlaku untuk service & qty tertentu.
     * Contoh: PriceTier::getDiskon('jersey', 50) → 7.0
     */
    public static function getDiskon(string $service, int $qty): float
    {
        $tier = static::where('service', $service)
            ->where('min_qty', '<=', $qty)
            ->orderByDesc('min_qty')
            ->first();

        return $tier ? (float) $tier->discount_pct : 0.0;
    }

    public function scopeUntukService($query, string $service)
    {
        return $query->where('service', $service)->orderBy('min_qty');
    }
}