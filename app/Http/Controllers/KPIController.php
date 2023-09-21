<?php

namespace App\Http\Controllers;

use App\Models\KPI;
use Illuminate\Http\Request;

class KPIController extends Controller
{
    public function storeCapaian(Request $request, $circle) {
        $kpi = KPI::create([
            'judul' => $request->input('kpi-judul'),
            'circle' => $circle,
            'tipe' => 'productivity',
        ]);

        return redirect(route('capaian', $circle));
    }
}
