<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KPI extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'target_int',
        'target',
        'tipe_target',
        'circle',
        'tipe'
    ];
}
