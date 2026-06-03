<?php

namespace App\Http\Controllers;

use App\Models\{
    Setting, HeroSetting, Layanan, Material,
    Portfolio, Testimonial, AreaLayanan,
    TrustFeature, Statistic, PriceTier
};

class LandingController extends Controller
{
    public function index()
    {
        // Settings global
        $settings = Setting::pluck('value', 'key');

        // Hero
        $hero = HeroSetting::first();

        // Layanan (urut by field urutan)
        $layanan = Layanan::aktif()->get();
        $areaLayanan = AreaLayanan::aktif()->get();

        // Material (untuk marquee & kalkulator)
        $materials = Material::aktif()->get();
        $materialsByKat = $materials->groupBy('kategori');

        // Portfolio
        $portfolios = Portfolio::aktif()->get();

        // Testimoni
        $testimonials = Testimonial::aktif()->get();

        // Area Layanan
        $areaJersey = AreaLayanan::where('tipe', 'jersey')
            ->where('aktif', true)->orderBy('urutan')->get();
        $areaHijab  = AreaLayanan::where('tipe', 'hijab')
            ->where('aktif', true)->orderBy('urutan')->get();

        // Trust Features
        $trustFeatures = TrustFeature::where('aktif', true)
            ->orderBy('urutan')->get();

        // Statistik
        $statistics = Statistic::where('aktif', true)
            ->orderBy('urutan')->get();

        // Price Tiers untuk JS kalkulator
        $priceTiers = PriceTier::all()->groupBy('service');

        return view('landing', compact(
            'settings', 'hero', 'layanan', 'materials',
            'materialsByKat', 'portfolios', 'testimonials',
            'areaJersey', 'areaHijab', 'trustFeatures',
            'statistics', 'priceTiers','areaLayanan'
        ));
    }
}