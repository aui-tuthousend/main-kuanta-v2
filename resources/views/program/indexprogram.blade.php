@extends('program.program')
@section('indexprogram')

    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">List Program dari KPI's {{$programs->judul}}</h2>
        <a href='{{route('addprogram', $id)}}' class="btn btn-dark">Add Program + </a>
    </div>

    <table class="table table-hover mt-3 table-bordered">
        <thead class="table-primary">
        <tr>
            <th>No</th>
            <th>Judul Program</th>
            <th>Circle</th>
            <th>PJ</th>
            <th>Status</th>
            <th>Jumlah Kegiatan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($programs->program as $pro)
{{--            <tr onclick="window.location='{{ route('kegiatan', $pro->id) }}';" style="cursor: pointer;">--}}
            <tr>
                <td class="align-middle">{{$loop->iteration}}</td>
                <td class="align-middle">{{$pro->judul}}</td>
                <td class="align-middle">{{$pro->circle}}</td>
                <td class="align-middle">{{$pro->pj}}</td>
                <td class="align-middle">{{$pro->status}}</td>
                <td class="align-middle">{{$pro->kegiatan->count()}}</td>
                <td class="align-middle">
                    <a
                        href="javascript:void(0)"
                        id="edit-program"
                        data-url="{{ route('editprogram', $pro->id) }}"
                        class="btn btn-info"
                    >Edit
                    </a>
                    <a href="{{ route('kegiatan', $pro->id) }}" class="btn btn-warning">detail</a>
                    @if($pro->kegiatan->count() == 0)
                        <form action="{{ route('deleteprogram', $pro->id, $pro->kegiatan->count()) }}">
                            @csrf
                            @method('DELETE')
                        <a href="{{ route('deleteprogram', $pro->id, $pro->kegiatan->count()) }}" class="btn btn-danger" onclick="return confirm('Delete Program?')">delete</a>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
@include('program.crud.modalEdit')
