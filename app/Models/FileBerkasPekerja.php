<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FileBerkasPekerja
 *
 * @property $id
 * @property $pekerja_id
 * @property $nama_berkas
 * @property $lokasi
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FileBerkasPekerja extends Model
{




    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "file_berkas_pekerja";
    protected $fillable = ['pekerja_id', 'nama_berkas', 'lokasi'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pekerja()
    {
        return $this->belongsTo(\App\Models\Pekerja::class, 'pekerja_id', 'id');
    }
}
