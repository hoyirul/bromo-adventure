<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe'
    ];

    public function paket(){
        return $this->hasMany(Paket::class, 'tipe_id', 'id');
    }
}
