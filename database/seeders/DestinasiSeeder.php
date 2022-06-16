<?php

namespace Database\Seeders;

use App\Models\Destinasi;
use Illuminate\Database\Seeder;

class DestinasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['destinasi' => 'Penanjakan'],
            ['destinasi' => 'Bukit Widodaren'],
            ['destinasi' => 'Kawah Bromo'],
            ['destinasi' => 'Lautan Pasir'],
            ['destinasi' => 'Bukit Teletubbies'],
        ];

        foreach($data as $row){
            Destinasi::create([
                'destinasi' => $row['destinasi']
            ]);
        }
    }
}
