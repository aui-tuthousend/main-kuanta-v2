@extends('kpis.capaian.headerCapaian')
@section('capaian')

    <div class="d-flex justify-content-between mb-3 mt-3">
        <div class="d-flex">
            <h2>List KPI's Circle {{$circle}}</h2>
        </div>
        <div class="d-flex flex-row ">
            @if(\Illuminate\Support\Facades\Auth::user()->circle=="admin")
                <button type="button" class="btn btn-primary me-1" data-toggle="modal" data-target="#addKpi">
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
                        <li><a class="dropdown-item" href="{{route('capaian', $c)}}">{{$c}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <ol class="list-group list-group-numbered">
        {{--        <a href='{{route('program', "CT")}}' class="list-group-item">Revenue 3M</a>--}}
        {{--        <a href='{{route('program', 2)}}' class="list-group-item">Revenue 3M</a>--}}
        @foreach($kpis as $kpi)
            <a href='{{route('program', $kpi->id)}}' class="list-group-item">{{$kpi->judul}}</a>

        @endforeach
        {{--        judul kpi as parameter  --}}
    </ol>



@include('kpis.capaian.addKpi')
@endsection
