<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\KPI;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $list = ['Judul Program','Circle','Judul Kegiatan','Target','Catatan','Capaian','Action',];
        $user = Auth::user();
        $kegiatan = Kegiatan::where('id_user', $user->id)->orderBy('created_at', 'DESC')->get();
        return view('homepage.index', compact('kegiatan', 'list'));
    }

//    <--------------------- PJ --------------------->

    public function getUser(Request $request){

        $tags=[];
        if($search=$request->name){
            $tags=User::where('name','LIKE',"%search%")->get();
        }
        return response()->json($tags);
    }

//    <--------------------- Program --------------------->
    public function indexProgram($id){
        $programs = KPI::with('program')->findOrFail($id);
        $users = User::where('circle', $programs->circle)->get();
//        $users = User::orderBy('circle', 'ASC')->get();


        return view('program.indexprogram', compact('programs', 'id', 'users'));
    }

//    <--------------------- Kegiatan --------------------->

    public function indexKegiatan($id){
        $kegiatans = Program::with('kegiatan')->findOrFail($id);
        $loop=['Judul Kegiatan', 'Circle', 'Target', 'Capaian', 'Catatan', 'Username', 'Deadline', 'Status', 'Presentase Ketercapaian', 'Action'];
        $users = User::orderBy('circle', 'ASC')->get();

        return view('kegiatan.indexkegiatan', compact('loop', 'kegiatans', 'users'));
    }
}


