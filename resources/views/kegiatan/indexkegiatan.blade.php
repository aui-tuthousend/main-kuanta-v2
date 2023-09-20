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
            @if($kegiatans->kegiatan->count()>0)
        @foreach($kegiatans->kegiatan as $keg)
        <tr >
            <td class="align-middle">{{$keg->judul}}</td>
            <td class="align-middle">{{$keg->circle}}</td>
            <td class="align-middle">{{$keg->target_int}} {{$keg->tipe_target}}</td>
            <td class="align-middle">{{$keg->fixed_capaian}}</td>
            <td class="align-middle">{{$keg->catatan}}</td>
            <td class="align-middle">{{$keg->user_name}}</td>
            <td class="align-middle">{{$keg->deadline}}</td>
            <td class="align-middle">{{$keg->status}}</td>
            <td class="align-middle" style="text-align: center;">{{$keg->achieved}} %</td>
            <td class="align-middle">
                <div class="d-flex align-items-center justify-content-evenly">
                <a
                    href="javascript:void(0)"
                    id="edit-kegiatan"
                    data-url="{{ route('editKegiatan', $keg->id) }}"
                    class="btn btn-info"
                >Edit
                </a>
                <form action="{{route('deleteKegiatan', $keg->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="del-button-k" class="btn btn-danger" onclick="return confirm('Delete Kegiatan?')">Delete</button>
                </form>
                </div>
            </td>
        </tr>
        @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="10">Belum ada kegiatan</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection
@include('kegiatan.crud.modalEditK')

