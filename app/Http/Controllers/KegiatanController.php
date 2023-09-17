<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function create($id){
        $users = User::orderBy('circle', 'ASC')->get();
        $program = Program::find($id);

        return view('kegiatan.crud.addk', compact('users', 'program'));
    }

    public function store(Request $request, $id){

        $aidi = $request->input('selectedUser');
        $selected = User::find($aidi);
        $tar = $request->input('target');
        $get = $request->input('tt');
        $target = $tar . $get;

        $prog = Program::find($id);
        $kegiatan = Kegiatan::create([
            'id_kpi' => $prog->id_kpi,
            'id_program' => $id,
            'id_user' => $selected->id,
            'judul_program' => $request->input('jp'),
            'judul' => $request->input('jk'),
            'circle' => $prog->circle,
            'target_int' => $request->input('target'),
            'tipe_target' => $request->input('tt'),
            'target' => $target,
            'catatan' => $request->input('catatan'),
            'user_name' => $selected->name,
            'deadline' => $request->input('deadline'),
        ]);

        return redirect(route('kegiatan', $id))->with('KegiatanAdded', 'Kegiatan Berhasil Ditambah');
    }

    public function show($id){
        $keg = Kegiatan::find($id);
        $data = [
            'target' => $keg->target,
            'capaian' => $keg->capaian,
            'tipe_target' => $keg->tipe_target,
        ];

        return response()->json($data);
    }
}
