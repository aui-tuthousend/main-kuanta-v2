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
            <th>Judul Program</th>
            <th>Circle</th>
            <th>Judul Kegiatan</th>
            <th>Target</th>
            <th>Catatan</th>
            <th>Capaian</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr style="text-align: center;">
            <td class="align-middle">ini judul prog</td>
            <td class="align-middle">School Design</td>
            <td class="align-middle">ini judul keg</td>
            <td class="align-middle">5 M</td>
            <td class="align-middle">ini catatan</td>
            <td class="align-middle">ini capaian</td>
            <td class="align-middle">
                <a href="#" class="btn btn-info" data-toggle="modal" data-target="#update">update capaian</a>
                <a href="{{ route('kegiatan', "programnya apa") }}" class="btn btn-info">detail</a>
            </td>
        </tr>
        </tbody>
    </table>

    @include('homepage.modalupdatecapaian.updateCapaian')
@endsection
