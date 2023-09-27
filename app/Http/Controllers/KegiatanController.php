<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\KPI;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function create($id){
        $users = User::orderBy('circle', 'ASC')->get();
        $program = Program::find($id);

        return view('kegiatan.crud.addk', compact( 'program', 'users'));
    }

    public function store(Request $request, $id){

        $aidi = $request->input('selectedUser');
        $selected = User::find($aidi);
        $tar = $request->input('target');
        $get = $request->input('tt');
        $target = $tar . " " . $get;
        $prog = Program::find($id);
        $kp = KPI::find($prog->id_kpi);

        $kegiatan = Kegiatan::create([
            'id_kpi' => $prog->id_kpi,
            'id_program' => $id,
            'id_user' => $selected->id,
            'judul_program' => $prog->judul,
            'judul' => $request->input('jk'),
            'circle' => $kp->circle,
            'target_int' => $request->input('target'),
            'tipe_target' => $request->input('tt'),
            'target' => $target,
            'catatan' => $request->input('catatan'),
            'user_name' => $selected->name,
            'deadline' => $request->input('deadline'),
        ]);

        if ($selected->circle != $prog->circle1){
            if ($prog->circle2 == null){
                $prog->update([
                    'circle2' => $selected->circle,
                ]);
            } else {
                if ($selected->circle == $prog->circle2) {

                    return redirect(route('kegiatan', $id))->with('KegiatanAdded', 'Kegiatan Berhasil Ditambah');
                } else {
                    if($prog->circle3 == null){
                        $prog->update([
                            'circle3' => $selected->circle,
                        ]);
                    } else {
                        if ($selected->circle == $prog->circle3) {

                            return redirect(route('kegiatan', $id))->with('KegiatanAdded', 'Kegiatan Berhasil Ditambah');
                        } else {

                            return redirect(route('kegiatan', $id))->with('KegiatanAdded', 'Kegiatan Berhasil Ditambah');
                        }
                    }
                }
            }
//
        }

        return redirect(route('kegiatan', $id))->with('KegiatanAdded', 'Kegiatan Berhasil Ditambah');
    }

    public function show($id){
        $keg = Kegiatan::find($id);
        $data = [
            'id' => $keg->id,
            'target' => $keg->target,
            'capaian' => $keg->capaian,
            'tipe_target' => $keg->tipe_target,
        ];

        return response()->json($data);
    }

    public function storeCapaian(Request $request, $ai){
        $id = (int)$request->input('kegiatan-id');
        $kegiatan = Kegiatan::find($id);
        $capai = $request->input('kegiatan-capaian');
        $an = $kegiatan->tipe_target;
        $ach = ($capai / $kegiatan->target_int) * 100;
        $caapaian = $capai ." ".$an;

        $pro = Program::find($kegiatan->id_program);
        (float)$ket = $pro->kegiatan()->sum('achieved');
        $keg = $pro->kegiatan()->count();
        (float)$ketKeg = ($ket / $keg);

        $kegiatan->update([
            'capaian' => $capai,
            'fixed_capaian' => $caapaian,
            'status' => "on going",
            'achieved' => $ach,
        ]);

        $pro->update([
            'status' => "on going",
            'capaian_kegiatan' => $ketKeg,
        ]);
        return redirect('/home')->with('capaianUpdated', 'Capaian berhasil diupdate!');
    }

    public function editKegiatan($id){
        $keg = Kegiatan::find($id);
        $data = [
            'id' => $keg->id,
            'judul' => $keg->judul,
            'target_int' => $keg->target_int,
            'tipe_target' => $keg->tipe_target,
            'catatan' => $keg->catatan,
            'deadline' => $keg->deadline,
            'user_name' => $keg->user_name,
            'id_user' => $keg->id_user,
        ];

        return response()->json($data);
    }

    public function storeEditK(Request $request, $idi){
        $id = (int)$request->input('kegiatan-aidi');
        $tipe_target = $request->input('kegiatan-target-new');
        $tipe_target_old = $request->input('kegiatan-target-old');
        $id_user_new = $request->input('kegiatan-user-new');
//        $user_old = $request->input('kegiatan-user-old');
        $id_user_old = $request->input('kegiatan-user-id');
        $idu = null; $tp = null;

        if($id_user_new == "nope"){
            $idu = $id_user_old;
        } else {
            $idu = $id_user_new;
        }

        if($tipe_target == "nope"){
            $tp = $tipe_target_old;
        } else {
            $tp = $tipe_target;
        }


        $kegiatan = Kegiatan::find($id);
        $selected = User::find($idu);
//        $prog = Program::find($kegiatan->id_program);
        $kegiatan->update([
            'judul' => $request->input('kegiatan-judul'),
            'target_int' => $request->input('kegiatan-target'),
            'tipe_target' => $tp,
            'catatan' => $request->input('kegiatan-catatan'),
            'deadline' => $request->input('kegiatan-deadline'),
            'user_name' => $selected->name,
            'id_user' => $idu

        ]);

        return redirect(route('kegiatan', $kegiatan->id_program));
    }

    public function delete($id){
        $kegiatan = Kegiatan::find($id);
        $idk = $kegiatan->id_program;


        $kegiatan->delete();
        return redirect(route('kegiatan', $idk))->with('KegiatanDeleted', 'Kegiatan Berhasil Dihapus!');
    }
}
