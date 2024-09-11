<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Barang untuk kategori 1: Elektronik
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BR001', 'barang_nama' => 'TV LED 32 Inch', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'BR002', 'barang_nama' => 'Smartphone 6GB RAM', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'BR003', 'barang_nama' => 'Laptop Core i5', 'harga_beli' => 6000000, 'harga_jual' => 7000000],
            ['barang_id' => 4, 'kategori_id' => 1, 'barang_kode' => 'BR004', 'barang_nama' => 'Kamera DSLR', 'harga_beli' => 4000000, 'harga_jual' => 4500000],
            ['barang_id' => 5, 'kategori_id' => 1, 'barang_kode' => 'BR005', 'barang_nama' => 'Headphone Bluetooth', 'harga_beli' => 500000, 'harga_jual' => 600000],

            // Barang untuk kategori 2: Perabotan
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'BR006', 'barang_nama' => 'Meja Kayu Jati', 'harga_beli' => 1000000, 'harga_jual' => 1500000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'BR007', 'barang_nama' => 'Sofa Minimalis', 'harga_beli' => 3000000, 'harga_jual' => 3500000],
            ['barang_id' => 8, 'kategori_id' => 2, 'barang_kode' => 'BR008', 'barang_nama' => 'Lemari Pakaian', 'harga_beli' => 2000000, 'harga_jual' => 2500000],
            ['barang_id' => 9, 'kategori_id' => 2, 'barang_kode' => 'BR009', 'barang_nama' => 'Kursi Kantor', 'harga_beli' => 800000, 'harga_jual' => 1000000],
            ['barang_id' => 10, 'kategori_id' => 2, 'barang_kode' => 'BR010', 'barang_nama' => 'Rak Buku Besi', 'harga_beli' => 600000, 'harga_jual' => 800000],

            // Barang untuk kategori 3: Pakaian
            ['barang_id' => 11, 'kategori_id' => 3, 'barang_kode' => 'BR011', 'barang_nama' => 'Jaket Denim', 'harga_beli' => 150000, 'harga_jual' => 200000],
            ['barang_id' => 12, 'kategori_id' => 3, 'barang_kode' => 'BR012', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 50000, 'harga_jual' => 75000],
            ['barang_id' => 13, 'kategori_id' => 3, 'barang_kode' => 'BR013', 'barang_nama' => 'Celana Jeans', 'harga_beli' => 100000, 'harga_jual' => 150000],
            ['barang_id' => 14, 'kategori_id' => 3, 'barang_kode' => 'BR014', 'barang_nama' => 'Sweater Hoodie', 'harga_beli' => 120000, 'harga_jual' => 180000],
            ['barang_id' => 15, 'kategori_id' => 3, 'barang_kode' => 'BR015', 'barang_nama' => 'Kemeja Formal', 'harga_beli' => 170000, 'harga_jual' => 220000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
