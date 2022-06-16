<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'user_id', 'pake_id', 'nama_pemesan', 'nomor_hp', 'keterangan', 'tanggal_pesan', 'tanggal_bayar', 'tanggal_tour', 'total' , 'status'
    ];

    public $incrementing = false;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function paket(){
        return $this->belongsTo(Paket::class, 'paket_id', 'id');
    }
}
