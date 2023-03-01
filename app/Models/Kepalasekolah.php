<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepalasekolah extends Model
{
    use HasFactory;
    protected $table = 'kepalasekolahs';
    protected $fillable = ['nama', 'jk', 'nip', 'notelepon', 'foto', 'alamat'];
}
