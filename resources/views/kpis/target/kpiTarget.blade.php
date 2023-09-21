@extends('kpis.target.headerTarget')
@section('target')
    <div class="d-flex align-items-center justify-content-between mb-3 mt-3">
        <h2>List KPI's Target {{$circle}}</h2>
        {{--        if auth == executive or admin --}}
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Other Circle
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                @foreach($cir as $c)
                    <li><a class="dropdown-item" href="{{route('target', $c)}}">{{$c}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>

    <table class="table table-bordered mt-3">
        <thead class="table-primary">
        <tr style="text-align: center;">
            <th rowspan="2" >No</th>
            <th rowspan="2" >Judul</th>
            <th rowspan="2" >Circle</th>
            <th rowspan="2" >Target</th>
            <th colspan="12">Capaian/bulan</th>
        </tr>
        <tr style="text-align: center;">
            @foreach($month as $num)
              <th>{{$num}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        <tr style="text-align: center;">
            @if($kpis->count()>0)
                @foreach($kpis as $kpi)
                <td class="align-middle">{{$loop->iteration}}</td>
                <td class="align-middle">{{$kpi->judul}}</td>
                <td class="align-middle">{{$kpi->circle}}</td>
                <td class="align-middle">{{$kpi->target}}</td>
                @endforeach
                @foreach($month as $num)
                    <td class="align-middle">{{$num}}</td>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="16">Belum ada kegiatan</td>
                </tr>
            @endif
        </tr>
        </tbody>
    </table>

@endsection
