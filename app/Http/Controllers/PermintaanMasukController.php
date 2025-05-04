<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BahanBaku;

class PermintaanMasukController extends Controller
{
    public function index()
    {
        // Sample data for bahan baku items (flour)
        $bahanBaku = [
            [
                'id' => 1,
                'nama' => 'Tepung Terigu Protein Tinggi',
                'stok' => 690,
                'satuan' => 'kg',
                'harga' => 'Rp 12.500',
                'kode' => 'U01',
                'kategori' => 'Bahan dasar utama untuk membuat mie, berperan dalam membentuk struktur dan tekstur',
                'expired' => '30 April 2025',
                'protein' => '12-14%',
                'tekstur' => 'Kuat, Elastis, Kenyal'
            ],
            [
                'id' => 2,
                'nama' => 'Tepung Terigu Protein Tinggi',
                'stok' => 690,
                'satuan' => 'kg',
                'harga' => 'Rp 12.500',
                'kode' => 'U01',
                'kategori' => 'Bahan dasar utama untuk membuat mie, berperan dalam membentuk struktur dan tekstur',
                'expired' => '30 April 2025',
                'protein' => '12-14%',
                'tekstur' => 'Kuat, Elastis, Kenyal'
            ],
            [
                'id' => 3,
                'nama' => 'Tepung Terigu Protein Tinggi',
                'stok' => 690,
                'satuan' => 'kg',
                'harga' => 'Rp 12.500',
                'kode' => 'U01',
                'kategori' => 'Bahan dasar utama untuk membuat mie, berperan dalam membentuk struktur dan tekstur',
                'expired' => '30 April 2025',
                'protein' => '12-14%',
                'tekstur' => 'Kuat, Elastis, Kenyal'
            ],
            [
                'id' => 4,
                'nama' => 'Tepung Terigu Protein Tinggi',
                'stok' => 690,
                'satuan' => 'kg',
                'harga' => 'Rp 12.500',
                'kode' => 'U01',
                'kategori' => 'Bahan dasar utama untuk membuat mie, berperan dalam membentuk struktur dan tekstur',
                'expired' => '30 April 2025',
                'protein' => '12-14%',
                'tekstur' => 'Kuat, Elastis, Kenyal'
            ],
            [
                'id' => 5,
                'nama' => 'Tepung Terigu Protein Tinggi',
                'stok' => 690,
                'satuan' => 'kg',
                'harga' => 'Rp 12.500',
                'kode' => 'U01',
                'kategori' => 'Bahan dasar utama untuk membuat mie, berperan dalam membentuk struktur dan tekstur',
                'expired' => '30 April 2025',
                'protein' => '12-14%',
                'tekstur' => 'Kuat, Elastis, Kenyal'
            ],
            [
                'id' => 6,
                'nama' => 'Tepung Terigu Protein Tinggi',
                'stok' => 690,
                'satuan' => 'kg',
                'harga' => 'Rp 12.500',
                'kode' => 'U01',
                'kategori' => 'Bahan dasar utama untuk membuat mie, berperan dalam membentuk struktur dan tekstur',
                'expired' => '30 April 2025',
                'protein' => '12-14%',
                'tekstur' => 'Kuat, Elastis, Kenyal'
            ],
            [
                'id' => 7,
                'nama' => 'Tepung Terigu Protein Tinggi',
                'stok' => 690,
                'satuan' => 'kg',
                'harga' => 'Rp 12.500',
                'kode' => 'U01',
                'kategori' => 'Bahan dasar utama untuk membuat mie, berperan dalam membentuk struktur dan tekstur',
                'expired' => '30 April 2025',
                'protein' => '12-14%',
                'tekstur' => 'Kuat, Elastis, Kenyal'
            ],
            [
                'id' => 8,
                'nama' => 'Tepung Terigu Protein Tinggi',
                'stok' => 690,
                'satuan' => 'kg',
                'harga' => 'Rp 12.500',
                'kode' => 'U01',
                'kategori' => 'Bahan dasar utama untuk membuat mie, berperan dalam membentuk struktur dan tekstur',
                'expired' => '30 April 2025',
                'protein' => '12-14%',
                'tekstur' => 'Kuat, Elastis, Kenyal'
            ]
        ];

        $categories = [
            'Bahan Baku Utama',
            'Bahan Tambahan',
            'Bumbu & Perisa',
            'Pelengkap Kemasan',
            'Bahan Pelengkap Lain'
        ];

        return view('permintaan-masuk', compact('bahanBaku', 'categories'));
    }
}
