<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Carbon\Carbon;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'gurus';
    protected $fillable = [
        'nama',
        'nip',
        'id_agama',
        'id_jabatan',
        'id_jk',
        'id_status',
        'id_kelas',
        'id_mp',
        'email',
        'alamat',
        'notelepon',
        'tgl_masuk',
        'foto',
    ];

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'id_agama');
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }

    public function jeniskelamin()
    {
        return $this->belongsTo(Jenisk::class, 'id_jk');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function mataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'id_mp');
    }
}
