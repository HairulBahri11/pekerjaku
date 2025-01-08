<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FileBerkasMajikan
 *
 * @property $id
 * @property $majikan_id
 * @property $nama_file
 * @property $lokasi
 * @property $created_at
 * @property $updated_at
 *
 * @property Majikan $majikan
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FileBerkasMajikan extends Model
{




    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "file_berkas_majikan";
    protected $fillable = ['majikan_id', 'nama_file', 'lokasi'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function majikan()
    {
        return $this->belongsTo(\App\Models\Majikan::class, 'majikan_id', 'id');
    }
}
