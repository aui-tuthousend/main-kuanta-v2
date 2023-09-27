<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\KPI;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function create($id){
        $kpi = KPI::find($id);
//        $users = User::orderBy('circle', 'ASC')->get();
        $users = User::where('circle', $kpi->circle)->get();


        return view('program.crud.add', compact('kpi', 'users'));
    }

    public function store(Request $request, $id){
        $program = Program::create([
            'id_kpi' => $id,
            'judul_kpi' => $request->input('judulKpi'),
            'circle' => $request->input('circle'),
            'circle1' => $request->input('circle'),
            'judul' => $request->input('judul'),
            'pj' => $request->input('pj')
        ]);

        return redirect()->route('program', $id)->with('ProgramAdded', 'Program Berhasil Ditambah');
    }

    public function editProgram($id){
        $pro = Program::find($id);
        $data = [
            'id' => $pro->id,
            'judul' => $pro->judul,
            'circle' => $pro->circle,
            'pj' => $pro->pj,

        ];

        return response()->json($data);
    }

    public function editCpProgram($id){
        $pro = Program::find($id);
        $data = [
            'id' => $pro->id,
            'target' => $pro->target,
            'tipe_target' => $pro->tipe_target,
            'capaian' => $pro->capaian,
        ];

        return response()->json($data);
    }

    public function storeEdit(Request $request, $idi){
        $id = (int)$request->input('program-id');
        $peje = $request->input('program-pj-new');
        $pro = Program::find($id);
        $pj = null;

        if ($peje == "nope"){
            $pj = $request->input('program-pj');
        } else {
            $pj = $peje;
        }

        $pro->update([
            'judul' => $request->input('program-judul'),
            'pj' => $pj,
        ]);

        return redirect()->back();
    }

    public function storeEditCp(Request $request, $idi){

    }


    public function delete($id, $key){
        $prog = Program::find($id);
        $idk = $prog->id_kpi;

        if($key != 0){

            return redirect(route('program', $idk))->with('ProgramUndeleted', 'Program Tidak Bisa Dihapus!');
        }

        $prog->delete();
        return redirect(route('program', $idk))->with('ProgramDeleted', 'Program Berhasil Dihapus!');
    }
}
