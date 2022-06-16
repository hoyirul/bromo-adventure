<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe_id', 'deskripsi', 'mulai_harga', 'foto'
    ];

    public function tipe(){
        return $this->belongsTo(Tipe::class, 'tipe_id', 'id');
    }
}
