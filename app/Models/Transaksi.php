<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaksi
 *
 * @property $id
 * @property $pemesanan_id
 * @property $biaya_admin
 * @property $metode_pembayaran
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Pemesanan $pemesanan
 * @property DetailTransaksi[] $detailTransaksis
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transaksi extends Model
{




    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "transaksi";
    protected $fillable = ['pemesanan_id', 'biaya_admin', 'metode_pembayaran', 'status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pemesanan()
    {
        return $this->belongsTo(\App\Models\Pemesanan::class, 'pemesanan_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detailTransaksis()
    {
        return $this->hasMany(\App\Models\DetailTransaksi::class, 'id', 'transaksi_id');
    }


}
