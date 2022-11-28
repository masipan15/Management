<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	    'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
		]);
        DB::table('kategoris')->insert([
            'kategori' => 'flashdisk'
        ]);
        DB::table('barangs')->insert([
            'kodebarang' => '12345',
            'kategoris_id' => '1',
            'namabarang' => 'flashdisk sandisk',
            'merk' => 'sandisk',
            'deskripsi' => 'penyimpanan banyak dan barang awet',
            'stok' => '100',
            'harga' => '40000',
            'hargajual' => '50000',
            'foto1' => 'flashdisk.jpg',
        ]);
        DB::table('suppliers')->insert([
            'nama_supplier' => 'rudi',
            'alamat_supplier' => 'banyuwangi',
            'notelpon' => '081234567892',
        ]);
    }

    
}
