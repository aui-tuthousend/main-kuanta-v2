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
        $program = find($id);

        return view('kegiatan.crud.addk', compact('users', 'program'));
    }

    public function store(Request $request, $id){

        $aidi = $request->input('user');
        $user = User::find($aidi);

        $prog = Program::find($id);
        $kegiatan = Kegiatan::create([
            'id_kpi' => $prog->id_kpi,
            'id_program' => $id,
            'id_user' => $request->input('user'),
            'judul_program' => $request->input('jp'),
            'judul' => $request->input('jk'),
            'circle' => $prog->circle,
            'target_int' => $request->input('target'),
            'tipe_target' => $request->input('tt'),
            'catatan' => $request->input('catatan'),
            'user_name' => $user->name,
            'deadline' => $request->input('deadline'),
        ]);
    }
}
