<?php

namespace App\Http\Controllers;

use App\Models\KPI;
use App\Models\KPItarget;
use Illuminate\Http\Request;

class KPIController extends Controller
{
    public function storeKPIcapaian(Request $request, $circle) {
        $kpi = KPI::create([
            'judul' => $request->input('kpi-judul'),
            'circle' => $circle,
            'tipe' => 'productivity',
        ]);

        return redirect(route('capaian', $circle))->with('KpiAdded', 'KPI berhasil ditambah');
    }

    public function storeKPItarget(Request $request, $circle){
        $tar = $request->input('kpi-target-int');
        $get = $request->input('kpi-tipe-target');
        $target = $tar. " " .$get;
        $kpi = KPItarget::create([
            'judul' => $request->input('kpi-judul'),
            'target_int' => $tar,
            'tipe_target' => $get,
            'target' => $target,
            'circle' => $circle,
        ]);

        return redirect(route('target', $circle))->with('KpiTargetAdded', 'KPI target berhasil ditambah');
    }
}
