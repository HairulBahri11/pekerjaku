<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Majikan
 *
 * @property $id
 * @property $user_id
 * @property $alamat
 * @property $biaya_pendaftaran
 * @property $bukti_pembayaran
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @property FileBerkasMajikan[] $fileBerkasMajikans
 * @property Pemesanan[] $pemesanans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Majikan extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "majikan";
    protected $fillable = ['user_id', 'alamat', 'biaya_pendaftaran', 'bukti_pembayaran', 'status', 'payment_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fileBerkasMajikans()
    {
        return $this->hasMany(\App\Models\FileBerkasMajikan::class, 'id', 'majikan_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemesanans()
    {
        return $this->hasMany(\App\Models\Pemesanan::class, 'id', 'majikan_id');
    }
}
