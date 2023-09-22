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
        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Program">
    </div>

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
<script>
    function validateForm() {
        var selectedUser = document.getElementById("pj");

        if (selectedUser.value == "Pilih User") {
            alert("Silakan pilih user terlebih dahulu.");
            return false; // Menghentikan pengiriman formulir
        }

        return true; // Lanjutkan dengan pengiriman formulir
    }
</script>

@endsection
