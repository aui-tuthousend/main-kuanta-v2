<?php

namespace App\Http\Controllers;

use App\Models\KPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavbarController extends Controller
{
    public function indexCapaian($circle){
        $user = Auth::user();
        $kpis = KPI::where('circle', $user->circle)->orderBy('created_at', 'DESC');

        return view('kpis.kpiCapaian', compact('circle', 'kpis'));
    }

    public function indexTarget($circle){

        $month = [1,2,3,4,5,6,7,8,9,10,11,12];

        return view('kpis.kpiTarget', compact('month'));
    }
}
