<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelasguru extends Model
{
    use HasFactory;
    protected $table = 'kelasgurus';
    protected $fillable = ['id_kelas', 'id_guru', 'tahun_ajaran'];
}
