<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswaModel extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'kelas',
        'alamat',
        'no_hp'
    ];

    public function peminjaman()
    {
        return $this->hasMany(peminjamanModel::class);
    }
}
