<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profilsekolah extends Model
{
    use HasFactory;

    protected $table = 'profilsekolahs';
    protected $fillable = ['nama', 'alamat', 'email', 'notelepon', 'foto', 'nss', 'akreditasi'];
}
