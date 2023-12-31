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
            <th>Target</th>
            <th>Capaian</th>
            <th>Status</th>
            <th>Capaian Kegiatan</th>
            <th>Jumlah Kegiatan</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if($programs->program->count()>0)
        @foreach($programs->program as $pro)
{{--            <tr onclick="window.location='{{ route('kegiatan', $pro->id) }}';" style="cursor: pointer;">--}}
            <tr>
                <td class="align-middle">{{$loop->iteration}}</td>
                <td class="align-middle">{{$pro->judul}}</td>
                <td class="align-middle">{{$pro->circle}} {{$pro->circle1}} {{$pro->circle2}}</td>
                <td class="align-middle">{{$pro->pj}}</td>
                <td class="align-middle">{{$pro->target}}</td>
                <td class="align-middle">{{$pro->capaian}} {{$pro->tipe_target}}</td>
                <td class="align-middle">{{$pro->status}}</td>
                <td class="align-middle">{{$pro->capaian_kegiatan}} %</td>
                <td class="align-middle">{{$pro->kegiatan->count()}}</td>
                <td class="align-middle">
                    <div class="d-flex align-items-center">
                    <a
                        href="javascript:void(0)"
                        id="edit-program"
                        data-url="{{ route('editprogram', $pro->id) }}"
                        class="btn btn-info"
                    >Edit</a>
                    <a href="{{ route('kegiatan', $pro->id) }}" class="btn btn-warning">detail</a>
                    @if($pro->kegiatan->count() == 0)
                        <form action="{{ route('deleteprogram', ['id' => $pro->id, 'key' => $pro->kegiatan->count()]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="del-button-p" class="btn btn-danger" onclick="return confirm('Delete Program?')">Delete</button>
                        </form>
                    @endif
                        <a
                            href="javascript:void(0)"
                            id="edit-cp-program"
                            data-url="{{ route('editcpprogram', $pro->id) }}"
                            class="btn btn-info"
                        >up</a>
                    </div>
                </td>
            </tr>
        @endforeach
        @else
            <tr>
                <td class="text-center" colspan="7">Belum ada Program</td>
            </tr>
        @endif
        </tbody>
    </table>

@endsection
@include('program.crud.modalEdit')
@include('program.crud.modalUpdateCp')
