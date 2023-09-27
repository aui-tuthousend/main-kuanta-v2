@extends('program.crud.headeradd')
@section('add')
<title>Add Program</title>
<div class="container py-3">
    <form action="{{ route('storeprogram', $kpi->id) }}" method="POST" onsubmit="return validateForm()">
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
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Program" required>
    </div>
        <label for="Form2">Target</label>
        <div class="form-group">
            <input type="text" class="form-control" name="target-int" placeholder="Masukkan Quantity Target Program" required>
        </div>
        <label for="tt">Pilih Tipe Target</label>
        <select class="form-select" name="tt" id="tt" aria-label="Default select example">
            <option value="juta">Juta</option>
            <option value="milyar">Milyar</option>
            <option value="orang">Orang</option>
            <option value="orang/bulan">Orang/bulan</option>
            <option value="produk">Produk</option>
            <option value="%">Persentase</option>
        </select>

        <h6 class="pt-2">PJ:</h6>
        <select class="form-select" name="pj" id="pj" aria-label="Default select example">
            <option selected>Pilih User</option>
            @foreach($users as $user)
                <option value={{$user->name}}>{{$user->name}}</option>
            @endforeach
        </select>
{{--    </div>--}}

    <br/>
        <div>Submit Program</div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

</div>

@endsection
