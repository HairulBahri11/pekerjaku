<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesi
 *
 * @property $id
 * @property $profesi
 * @property $created_at
 * @property $updated_at
 *
 * @property Pekerja[] $pekerjas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesi extends Model
{

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "profesi";
    protected $fillable = ['profesi'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pekerjas()
    {
        return $this->hasMany(\App\Models\Pekerja::class, 'id', 'profesi_id');
    }


}
