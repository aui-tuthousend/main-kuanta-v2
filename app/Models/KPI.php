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

    public function program(){
        return$this->hasMany(Program::class,'id_kpi');
    }

    public function kegiatan(){
        return$this->hasMany(Kegiatan::class,'id_kpi');
    }

    public function capaian(){
        return$this->hasMany(Capaian::class,'id_kpi');
    }
}
