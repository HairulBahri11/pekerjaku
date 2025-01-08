<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LokasiKerja
 *
 * @property $id
 * @property $pekerja_id
 * @property $kota
 * @property $provinsi
 * @property $created_at
 * @property $updated_at
 *
 * @property Pekerja $pekerja
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LokasiKerja extends Model
{

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "lokasi_kerja";
    protected $fillable = ['pekerja_id', 'kota', 'provinsi'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pekerja()
    {
        return $this->belongsTo(\App\Models\Pekerja::class, 'pekerja_id', 'id');
    }


}
