<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamanModel extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $fillable = [
        'siswa_id',
        'buku_id',
        'tgl_peminjaman',
        'tgl_jatuh_tempo'
    ];

    public function buku()
    {
        return $this->belongsTo(bukuModel::class);
    }

    public function siswa()
    {
        return $this->belongsTo(siswaModel::class);
    }

    public function pengembalian()
    {
        return $this->hasOne(pengembalianModel::class, 'peminjaman_id', 'id');
    }
}
