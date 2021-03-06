<?php

namespace Database\Seeders;

use App\Models\Master;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Master = Master::create([
            'kode_kategori' => '123',
            'nama_barang' => 'Mouse',
            'kode_barang' => '111',
            'stok' => '200',
            'gambar' => 'no_image.png',
            'status' => '1',
        ]);
        $Master->save();

        $Master = Master::create([
            'kode_kategori' => '124',
            'nama_barang' => 'Keyboard',
            'kode_barang' => '112',
            'stok' => '100',
            'gambar' => 'no_image.png',
            'status' => '1',
        ]);
        $Master->save();
    }
}
