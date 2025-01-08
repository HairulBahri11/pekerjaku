<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FotoDetailPekerjaan
 *
 * @property $id
 * @property $pekerja_id
 * @property $foto
 * @property $created_at
 * @property $updated_at
 *
 * @property Pekerja $pekerja
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FotoDetailPekerjaan extends Model
{




    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "foto_detail_pekerjaan";
    protected $fillable = ['pekerja_id', 'foto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pekerja()
    {
        return $this->belongsTo(\App\Models\Pekerja::class, 'pekerja_id', 'id');
    }


}
