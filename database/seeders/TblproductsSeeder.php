<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TblproductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tblproducts')->insert([
            [
                'nama' => 'TV Samsung 55 Inch',
                'deskripsi' => 'Smart TV Samsung 55 inch 4K UHD dengan HDR',
                'foto' => 'tv_samsung.jpg',
                'harga' => 7500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kulkas LG 2 Pintu',
                'deskripsi' => 'Kulkas LG 2 pintu kapasitas 400 liter inverter',
                'foto' => 'kulkas_lg.jpg',
                'harga' => 5500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'AC Daikin 1 PK',
                'deskripsi' => 'AC Daikin 1 PK inverter hemat listrik',
                'foto' => 'ac_daikin.jpg',
                'harga' => 4200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Mesin Cuci Panasonic',
                'deskripsi' => 'Mesin cuci Panasonic front loading 8 kg',
                'foto' => 'mesin_cuci_panasonic.jpg',
                'harga' => 3800000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Laptop Asus VivoBook',
                'deskripsi' => 'Laptop Asus VivoBook 14 inch Intel Core i5 RAM 8GB',
                'foto' => 'laptop_asus.jpg',
                'harga' => 8500000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'HP iPhone 14',
                'deskripsi' => 'iPhone 14 128GB warna hitam garansi resmi',
                'foto' => 'iphone14.jpg',
                'harga' => 12000000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Microwave Sharp',
                'deskripsi' => 'Microwave Sharp 25 liter dengan grill',
                'foto' => 'microwave_sharp.jpg',
                'harga' => 1200000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Blender Philips',
                'deskripsi' => 'Blender Philips 2 liter 500 watt kaca',
                'foto' => 'blender_philips.jpg',
                'harga' => 450000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kipas Angin Miyako',
                'deskripsi' => 'Kipas angin stand Miyako 16 inch 3 kecepatan',
                'foto' => 'kipas_miyako.jpg',
                'harga' => 250000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rice Cooker Zojirushi',
                'deskripsi' => 'Rice cooker Zojirushi 1.8 liter kapasitas besar',
                'foto' => 'ricecooker_zojirushi.jpg',
                'harga' => 850000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}