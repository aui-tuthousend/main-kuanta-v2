@extends('kpis.target.headerTarget')
@section('target')
    <div class="d-flex justify-content-between mb-3 mt-3">
        <div class="d-flex">
            <h2>List KPI's Target {{$circle}}</h2>
        </div>
        <div class="d-flex flex-row ">
            @if(\Illuminate\Support\Facades\Auth::user()->circle=="admin")
                <button type="button" class="btn btn-primary me-1" data-toggle="modal" data-target="#addKpiTarget">
                    Add +
                </button>
            @endif
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                    Other Circle
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach($cir as $c)
                        <li><a class="dropdown-item" href="{{route('target', $c)}}">{{$c}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <table class="table table-bordered mt-3">
        <thead class="table-primary">
        <tr style="text-align: center;">
            <th rowspan="2" >No</th>
            <th rowspan="2" >Judul</th>
{{--            <th rowspan="2" >Circle</th>--}}
            <th rowspan="2" >Target</th>
            <th colspan="12">Capaian/bulan</th>
        </tr>
        <tr style="text-align: center;">
            @for ($bulan = 1; $bulan <= 12; $bulan++)
                <th>Bulan {{ $bulan }}</th>
            @endfor
        </tr>
        </thead>
        <tbody>
        <tr style="text-align: center;">
            @if($kpis->count()>0)
                @foreach($kpis as $kpi)
                <td class="align-middle">{{$loop->iteration}}</td>
                <td class="align-middle">{{$kpi->judul}}</td>
{{--                    <td class="align-middle">{{$kpi->circle}}</td>--}}
                    <td class="align-middle">{{$kpi->target}}</td>
                    <td class="align-middle">{{$kpi->bulan_1}}</td>
                    <td class="align-middle">{{$kpi->bulan_2}}</td>
                    <td class="align-middle">{{$kpi->bulan_3}}</td>
                    <td class="align-middle">{{$kpi->bulan_4}}</td>
                    <td class="align-middle">{{$kpi->bulan_5}}</td>
                    <td class="align-middle">{{$kpi->bulan_6}}</td>
                    <td class="align-middle">{{$kpi->bulan_7}}</td>
                    <td class="align-middle">{{$kpi->bulan_8}}</td>
                    <td class="align-middle">{{$kpi->bulan_9}}</td>
                    <td class="align-middle">{{$kpi->bulan_10}}</td>
                    <td class="align-middle">{{$kpi->bulan_11}}</td>
                    <td class="align-middle">{{$kpi->bulan_12}}</td>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="16">Belum ada KPI's</td>
                </tr>
            @endif
        </tr>
        </tbody>
    </table>

@endsection
@include('kpis.target.addKpiTarget')
