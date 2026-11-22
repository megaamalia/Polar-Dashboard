<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $datasets = [
            'mood' => [
                'judul' => '✨ Daily Mood & Self-Care Tracker',
                'satuan' => 'Poin',
                'labels' => [
                    'Skincare Routine 🧴',
                    'Quality Time & Jalan 💕',
                    'Tidur Nyenyak 🌙',
                    'Minum Air & Matcha 🍵',
                    'Me-Time & Musik 🎧'
                ],
                'data' => [92, 85, 74, 88, 95],
            ],
            'belajar' => [
                'judul' => '🎀 Fokus & Produktivitas Mingguan',
                'satuan' => 'Jam',
                'labels' => [
                    'Ngoding Web & IoT 💻',
                    'Praktikum Jaringan 🌐',
                    'Nugas & Laporan 📝',
                    'Review Materi 📚',
                    'Organisasi Kampus 🌸'
                ],
                'data' => [18, 12, 15, 10, 8],
            ],
            'wishlist' => [
                'judul' => '🛍️ Alokasi Budget Bulanan',
                'satuan' => 'Ribu Rp',
                'labels' => [
                    'Skincare & Makeup 💄',
                    'Jajan & Coffee Shop 🍰',
                    'Outfit & Aksesoris 👗',
                    'Tabungan Liburan ✈️',
                    'Kebutuhan Kuliah 🎒'
                ],
                'data' => [350, 280, 300, 500, 250],
            ],
        ];

        return view('chart', compact('datasets'));
    }
}