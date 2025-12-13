<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    // 🔥 TAMBAHKAN INI
    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'mengajar_kelas_id'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'mengajar_kelas_id');
    }
}
