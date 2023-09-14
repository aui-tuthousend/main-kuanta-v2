@extends('homepage.home')
@section('content')
    <h1 >Halo Disana </h1>
    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">List Kegiatan</h2>
{{--        <a href='/addtask' class="btn btn-dark">Add Task + </a>--}}
    </div>
    <table class="table table-hover table-bordered mt-3">
        <thead class="table-primary">
        <tr style="text-align: center;">
        @foreach($list as $li)
            <th>{{$li}}</th>
        @endforeach
        </tr>
        </thead>
        <tbody>
        @if($kegiatan->count()>0)
        @foreach($kegiatan as $keg)
            <tr style="text-align: center;">
                <td class="align-middle">{{$keg->judul_program}}</td>
                <td class="align-middle">{{$keg->circle}}</td>
                <td class="align-middle">{{$keg->judul}}</td>
                <td class="align-middle">{{$keg->target}}</td>
                <td class="align-middle">{{$keg->catatan}}</td>
                <td class="align-middle">{{$keg->capaian}}</td>
                <td class="align-middle">
                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#update">update capaian</a>
                    <a href="{{ route('kegiatan', "programnya apa") }}" class="btn btn-info">detail</a>
                </td>
            </tr>
        @endforeach
        @else
            <tr>
                <td class="text-center" colspan="7">Anda tidak punya tugas :D</td>
            </tr>
        @endif
        </tbody>
    </table>

    @include('homepage.modalupdatecapaian.updateCapaian')
@endsection
