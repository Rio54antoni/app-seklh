<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $table = 'murids';
    protected $fillable = [
        'nama',
        'nis',
        'id_jk',
        'tgl_lahir',
        'tempat_lahir',
        'alamat',
        'nohp',
        'nama_ayah',
        'nama_ibu'
    ];
}
