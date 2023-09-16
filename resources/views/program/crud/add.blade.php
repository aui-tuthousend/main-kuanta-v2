@extends('program.crud.headeradd')
@section('add')
<title>Add Program</title>
<div class="container py-3">
    <form action="{{ route('storeprogram', $kpi->id) }}" method="POST">
        @csrf
    <label for="Form1">Judul KPI's</label>
    <div class="form-group">
        <input type="text" class="form-control" id="judulKpi" name="judulKpi" value="{{$kpi->judul}}" readonly>
    </div>
    <label for="Form1">Circle</label>
    <div class="form-group">
        <input type="text" class="form-control" id="circle" name="circle" value="{{$kpi->circle}}" readonly>
    </div>
    <label for="Form2">Judul</label>
    <div class="form-group">
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Program">
    </div>

        <h6 class="pt-2">PJ:</h6>
        <select class="form-control" id="pj" name="pj">

        </select>
{{--    </div>--}}

    <br/>
        <div>Submit Program</div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

</div>

@endsection
