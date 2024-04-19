<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saya extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal',
        'email',
        'resume',
        'alamat',
        'no_hp',
        'riwayatPendidikan',
        'foto',
    ];
}
