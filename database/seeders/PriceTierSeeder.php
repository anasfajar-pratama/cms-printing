<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PriceTierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiers = [
            ['service' => 'jersey',  'min_qty' => 24,  'discount_pct' => 5],
            ['service' => 'jersey',  'min_qty' => 50,  'discount_pct' => 7],
            ['service' => 'jersey',  'min_qty' => 100, 'discount_pct' => 10],
            ['service' => 'textile', 'min_qty' => 10,  'discount_pct' => 5],
            ['service' => 'textile', 'min_qty' => 50,  'discount_pct' => 8],
            ['service' => 'hijab',   'min_qty' => 24,  'discount_pct' => 5],
            ['service' => 'hijab',   'min_qty' => 100, 'discount_pct' => 10],
        ];

        foreach ($tiers as $tier) {
            \App\Models\PriceTier::create($tier);
        }
    }
}
