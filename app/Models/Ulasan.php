<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ulasan
 *
 * @property $id
 * @property $detail_transaksi_id
 * @property $rating
 * @property $ulasan
 * @property $created_at
 * @property $updated_at
 *
 * @property DetailTransaksi $detailTransaksi
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ulasan extends Model
{




    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "ulasan";
    protected $fillable = ['detail_transaksi_id', 'rating', 'ulasan'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function detailTransaksi()
    {
        return $this->belongsTo(\App\Models\DetailTransaksi::class, 'detail_transaksi_id', 'id');
    }


}
