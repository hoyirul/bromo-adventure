<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Carbon\Carbon;
use Dotenv\Util\Str;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
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
                'user_id' => null,
                'paket_id' => 1,
                'nama_pemesan' => 'Doni Salmanan',
                'nomor_hp' => '08756474643',
                'keterangan' => 'Lorem Ipsum',
                'tanggal_pesan' => Carbon::now(),
                'tanggal_bayar' => null,
                'tanggal_tour' => Carbon::now(),
                'total' => 300000
            ],
            [
                'user_id' => null,
                'paket_id' => 2,
                'nama_pemesan' => 'Adanan Nisa',
                'nomor_hp' => '08756474643',
                'keterangan' => 'Lorem Ipsum',
                'tanggal_pesan' => Carbon::now(),
                'tanggal_bayar' => null,
                'tanggal_tour' => Carbon::now(),
                'total' => 500000
            ],
        ];

        $loop = 1;
        foreach($data as $row){
            Transaksi::create([
                'id' => strtoupper('BROMOXSGD').$loop++,
                'user_id' => $row['user_id'],
                'paket_id' => $row['paket_id'],
                'nama_pemesan' => $row['nama_pemesan'],
                'nomor_hp' => $row['nomor_hp'],
                'keterangan' => $row['keterangan'],
                'tanggal_pesan' => $row['tanggal_pesan'],
                'tanggal_bayar' => $row['tanggal_bayar'],
                'tanggal_tour' => $row['tanggal_tour'],
                'total' => $row['total'],
            ]);
        }
    }
}
