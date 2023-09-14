<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capaian extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kpi',
        'capaian_int',
        'tipe_capaian',
        'fixed_capaian',
        'bulan'
    ];
}
