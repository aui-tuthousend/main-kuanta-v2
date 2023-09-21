<?php

namespace App\Http\Controllers;

use App\Models\Capaian;
use App\Models\KPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavbarController extends Controller
{
    public function indexCapaian($circle){
        $cir = ['executive', 'creative technology', 'school design', 'operation', 'partnership', 'kuanta institute'];
//        $kpis = KPI::where('circle', $circle)->orderBy('created_at', 'DESC')->get();
        $kpis = KPI::where('circle', $circle)
            ->where('tipe', 'productivity')
            ->orderBy('created_at', 'DESC')
            ->get();


        return view('kpis.capaian.kpiCapaian', compact( 'kpis', 'cir', 'circle'));
    }

    public function indexTarget($circle){
        $cir = ['executive', 'creative technology', 'school design', 'operation', 'partnership', 'kuanta institute'];
//        $kp = KPI::find($circle);
        $kpis = KPI::where('circle', $circle)
            ->where('tipe', 'target')
            ->orderBy('created_at', 'DESC')
            ->get();
        $capaian = Capaian::whereIn('id_kpi', $kpis->pluck('id'))->get();


        return view('kpis.target.kpiTarget', compact( 'kpis', 'capaian','circle', 'cir'));
    }
}
