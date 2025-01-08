<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pekerja
 *
 * @property $id
 * @property $user_id
 * @property $latar_belakang_id
 * @property $profesi_id
 * @property $total_pengalaman
 * @property $pendidikan_terakhir
 * @property $gaji_bulanan
 * @property $tgl_lahir
 * @property $agama
 * @property $deskripsi
 * @property $tinggi
 * @property $berat
 * @property $suku
 * @property $status
 * @property $status_pribadi
 * @property $status_active
 * @property $created_at
 * @property $updated_at
 *
 * @property LatarBelakang $latarBelakang
 * @property Profesi $profesi
 * @property User $user
 * @property DetailTransaksi[] $detailTransaksis
 * @property FotoDetailPekerjaan[] $fotoDetailPekerjaans
 * @property LokasiKerja[] $lokasiKerjas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pekerja extends Model
{




    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "pekerja";
    protected $fillable = ['user_id', 'latar_belakang_id', 'profesi_id', 'total_pengalaman', 'pendidikan_terakhir', 'gaji_bulanan', 'tgl_lahir', 'agama', 'deskripsi', 'tinggi', 'berat', 'suku', 'status', 'status_pribadi', 'status_active', 'keterampilan'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function latarBelakang()
    {
        return $this->belongsTo(\App\Models\LatarBelakang::class, 'latar_belakang_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profesi()
    {
        return $this->belongsTo(\App\Models\Profesi::class, 'profesi_id', 'id');
    }

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
    public function detailTransaksis()
    {
        return $this->hasMany(\App\Models\DetailTransaksi::class, 'pekerja_id', 'id');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fileBerkasPekerjas()
    {
        return $this->hasMany(\App\Models\FileBerkasPekerja::class, 'pekerja_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fotoDetailPekerjaans()
    {
        return $this->hasMany(\App\Models\FotoDetailPekerjaan::class, 'pekerja_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lokasiKerjas()
    {
        return $this->hasMany(\App\Models\LokasiKerja::class, 'pekerja_id', 'id');
    }
}
