<?php

namespace App\Http\Controllers;

use App\Models\KPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavbarController extends Controller
{
    public function indexCapaian($circle){
        $cir = ['executive', 'creative technology', 'school design', 'operation', 'partnership', 'kuanta institute'];
        $kpis = KPI::where('circle', $circle)->orderBy('created_at', 'DESC')->get();

        return view('kpis.kpiCapaian', compact( 'kpis', 'cir', 'circle'));
    }

    public function indexTarget($circle){

        $month = [1,2,3,4,5,6,7,8,9,10,11,12];

        return view('kpis.kpiTarget', compact('month'));
    }
}
