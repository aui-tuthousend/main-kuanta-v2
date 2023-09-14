<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kpi',
        'judul_kpi',
        'circle',
        'judul',
        'pj',
        'status',
    ];

    public function kegiatan(){
        return$this->hasMany(Kegiatan::class,'id_program');
    }
    public function kpis (){
        return $this->belongsTo(KPI::class, 'id_kpi');
    }
}
