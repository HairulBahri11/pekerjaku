<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PaymentMethod
 *
 * @property $id
 * @property $bank
 * @property $no_rek
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PaymentMethod extends Model
{



    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $table = "payment_method";
    protected $fillable = ['bank', 'no_rek'];
}
