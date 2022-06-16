<?php

namespace Database\Seeders;

use App\Models\Paket;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'tipe_id' => 1,
                'deskripsi' => 'Lorem ipsum',
                'mulai_harga' => 300000,
            ],
            [
                'tipe_id' => 2,
                'deskripsi' => 'Lorem ipsum',
                'mulai_harga' => 500000,
            ],
            [
                'tipe_id' => 3,
                'deskripsi' => 'Lorem ipsum',
                'mulai_harga' => 400000,
            ],
        ];

        foreach($data as $row){
            Paket::create([
                'tipe_id' => $row['tipe_id'],
                'deskripsi' => $row['deskripsi'],
                'mulai_harga' => $row['mulai_harga'],
            ]);
        }
    }
}
