<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notifModel extends Model
{
    use HasFactory;
    protected $table = "notification";
    protected $fillable = ['jenis', 'pesan', 'tujuan_id'];
}
