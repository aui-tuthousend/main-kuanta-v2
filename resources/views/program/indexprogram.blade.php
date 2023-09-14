@extends('program.program')
@section('indexprogram')

    <div class="d-flex align-items-center justify-content-between">
        <h2 class="mb-0">List Program dari KPI's...</h2>
                <a href='{{route('addprogram', "Revenue")}}' class="btn btn-dark">Add Program + </a>
    </div>

    <table class="table table-hover mt-3">
        <thead class="table-primary">
        <tr>
            <th>Judul KPI's</th>
            <th>Judul Program</th>
            <th>Circle</th>
            <th>PJ</th>
            <th>Status</th>
            <th>Jumlah Kegiatan</th>
        </tr>
        </thead>
        <tbody>
        <tr onclick="window.location='{{ route('kegiatan', "programnya apa") }}';" style="cursor: pointer;">
            <td class="align-middle">ini judul KPI's</td>
            <td class="align-middle">ini judul Program</td>
            <td class="align-middle">Kuanta Institute</td>
            <td class="align-middle">Jaki</td>
            <td class="align-middle">On Progress</td>
            <td class="align-middle">8</td>
        </tr>
        </tbody>
    </table>

@endsection
