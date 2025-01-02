<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailTransaksi
 *
 * @property $id
 * @property $transaksi_id
 * @property $pekerja_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Pekerja $pekerja
 * @property Transaksi $transaksi
 * @property Ulasan[] $ulasans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class DetailTransaksi extends Model
{

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "detail_transaksi";
    protected $fillable = ['transaksi_id', 'pekerja_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pekerja()
    {
        return $this->belongsTo(\App\Models\Pekerja::class, 'pekerja_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaksi()
    {
        return $this->belongsTo(\App\Models\Transaksi::class, 'transaksi_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ulasans()
    {
        return $this->hasMany(\App\Models\Ulasan::class, 'id', 'detail_transaksi_id');
    }
}
