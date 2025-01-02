<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pemesanan
 *
 * @property $id
 * @property $majikan_id
 * @property $jenis_pekerjaan
 * @property $jumlah
 * @property $durasi
 * @property $lokasi
 * @property $tgl_mulai
 * @property $jam_kerja
 * @property $upah
 * @property $deskripsi_pekerjaan
 * @property $kualifikasi
 * @property $keterampilan
 * @property $bahasa
 * @property $created_at
 * @property $updated_at
 *
 * @property Majikan $majikan
 * @property Transaksi[] $transaksis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pemesanan extends Model
{




    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "pemesanan";
    protected $fillable = ['majikan_id', 'jenis_pekerjaan', 'jumlah', 'durasi', 'lokasi', 'tgl_mulai', 'jam_kerja', 'upah', 'deskripsi_pekerjaan', 'kualifikasi', 'keterampilan', 'bahasa'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function majikan()
    {
        return $this->belongsTo(\App\Models\Majikan::class, 'majikan_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaksis()
    {
        return $this->hasMany(\App\Models\Transaksi::class, 'id', 'pemesanan_id');
    }


}
