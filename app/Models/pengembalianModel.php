<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalianModel extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';
    protected $primaryKey = 'id';
    protected $fillable = [
        'peminjaman_id',
        'tanggal_pengembalian',
        'denda'
    ];

    public function peminjaman()
    {
        return $this->belongsTo(peminjamanModel::class);
    }
}
