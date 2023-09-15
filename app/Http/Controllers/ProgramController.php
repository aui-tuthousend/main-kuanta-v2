<?php

namespace App\Http\Controllers;

use App\Models\KPI;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function create($id){
        $kpi = KPI::find($id);

        return view('program.crud.add', compact('kpi'));
    }

    public function store(Request $request, $id){
        $program = Program::create([
            'id_kpi' => $id,
            'judul_kpi' => $request->input('judulKpi'),
            'circle' => $request->input('circle'),
            'judul' => $request->input('judul'),
            'pj' => $request->input('pj')
        ]);

        return redirect()->route('program', $id)->with('ProgramAdded', 'Program Berhasil Ditambah');
    }
}
