@extends('kegiatan.kegiatan')
@section('indexkegiatan')

    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">List Kegiatan dari Program {{$kegiatans->judul}}</h2>
        <a href='{{route('addkegiatan', $kegiatans->id)}}' class="btn btn-dark">Add Kegiatan + </a>
    </div>

    <table class="table table-hover mt-3">
        <thead class="table-primary">
        <tr >
            @foreach($loop as $num)
                <th>{{$num}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($kegiatans->kegiatan as $keg)
        <tr >
            <td class="align-middle">{{$keg->judul}}</td>
            <td class="align-middle">{{$keg->circle}}</td>
            <td class="align-middle">{{$keg->target}}</td>
            <td class="align-middle">{{$keg->capaian}}</td>
            <td class="align-middle">{{$keg->catatan}}</td>
            <td class="align-middle">{{$keg->user_name}}</td>
            <td class="align-middle">{{$keg->deadline}}</td>
            <td class="align-middle">{{$keg->status}}</td>
            <td class="align-middle" style="text-align: center;">{{$keg->achieved}}</td>
            <td class="align-middle">
                <a href="#" class="btn btn-warning">edit</a>
                <a href="#" class="btn btn-danger">delete</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
