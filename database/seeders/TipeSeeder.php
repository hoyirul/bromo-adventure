<?php

namespace Database\Seeders;

use App\Models\Tipe;
use Illuminate\Database\Seeder;

class TipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['tipe' => 'Private Trip'],
            ['tipe' => 'Open Trip'],
            ['tipe' => 'Couple / Pre Wedding'],
        ];

        foreach($data as $row){
            Tipe::create([
                'tipe' => $row['tipe']
            ]);
        }
    }
}
