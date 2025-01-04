<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LatarBelakang
 *
 * @property $id
 * @property $latar_belakang
 * @property $deskripsi
 * @property $created_at
 * @property $updated_at
 *
 * @property Pekerja[] $pekerjas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LatarBelakang extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "latar_belakang";
    protected $fillable = ['latar_belakang', 'deskripsi'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pekerjas()
    {
        return $this->hasMany(\App\Models\Pekerja::class, 'id', 'latar_belakang_id');
    }


}
