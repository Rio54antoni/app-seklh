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
        'id_agama',
        'id_jk',
        'tgl_lahir',
        'tempat_lahir',
        'alamat',
        'nohp',
        'nama_ayah',
        'nama_ibu',
        'tgl_masuk',
        'foto'
    ];
    public function agama()
    {
        return $this->belongsTo(Agama::class, 'id_agama');
    }

    public function jeniskelamin()
    {
        return $this->belongsTo(Jenisk::class, 'id_jk');
    }
}
