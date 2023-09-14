<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kpi',
        'id_program',
        'id_user',
        'judul_program',
        'judul',
        'circle',
        'target_int',
        'target',
        'tipe_target',
        'capaian',
        'fixed_capaian',
        'catatan',
        'user_name',
        'deadline',
        'status',
        'achieved',

    ];


}
