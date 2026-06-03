<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\PriceTier;
use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // GET /api/materials?service=jersey
    public function materials(Request $request)
    {
        $service = $request->get('service', 'jersey');

        $kategoriMap = [
            'jersey'  => ['jersey', 'sport', 'jaket'],
            'textile' => ['textile'],
            'hijab'   => ['hijab'],
        ];

        $kategori = $kategoriMap[$service] ?? ['jersey'];

        $materials = Material::whereIn('kategori', $kategori)
            ->where('aktif', true)
            ->orderBy('urutan')
            ->get(['id', 'nama', 'kategori', 'harga']);

        return response()->json($materials);
    }

    // POST /api/hitung
    public function hitung(Request $request)
    {
        $request->validate([
            'material_id' => 'required|exists:materials,id',
            'qty'         => 'required|integer|min:1',
            'service'     => 'required|string',
        ]);

        $material = Material::findOrFail($request->material_id);
        $qty = $request->qty;

        // Ambil tier diskon tertinggi yang berlaku
        $tier = PriceTier::where('service', $request->service)
            ->where('min_qty', '<=', $qty)
            ->orderByDesc('min_qty')
            ->first();

        $discount = $tier ? $tier->discount_pct : 0;
        $total    = round($qty * $material->harga * (1 - $discount / 100));

        return response()->json([
            'harga_satuan' => $material->harga,
            'qty'          => $qty,
            'discount_pct' => $discount,
            'total'        => $total,
            'total_format' => 'Rp ' . number_format($total, 0, ',', '.'),
            'note'         => $discount > 0
                ? "Termasuk diskon {$discount}% ({$qty}+ pcs)"
                : "Pesan {$qty} pcs (belum ada diskon)",
        ]);
    }
}