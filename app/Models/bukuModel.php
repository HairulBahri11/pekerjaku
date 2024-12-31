<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bukuModel extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul_buku',
        'penulis',
        'penerbit',
        'thn_terbit',
        'jumlah'
    ];

    public function peminjaman()
    {
        return $this->hasMany(peminjamanModel::class);
    }
}
