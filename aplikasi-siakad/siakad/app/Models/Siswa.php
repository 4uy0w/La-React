<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illumniate\Foudation\Auth\Siswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $primaryKey = "id_siswa";
    protected $table = "mahasiswa";

    protected $fillable = [
        "Nis",
        "Nama",
        "Kelas",
        "Jurusan"
    ];
}
