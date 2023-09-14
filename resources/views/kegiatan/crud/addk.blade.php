@include('navbar')
<title>Add Kegiatan</title>
<div class="container py-3">
    {{--    <form action="{{ route('addtask') }}" method="POST">--}}
    {{--        @csrf--}}

    <label for="opt">Pilih User</label>
    <select class="form-select" id="opt" aria-label="Default select example">
        <option selected>Pilih User</option>
        <option value="1">Orang 1</option>
        <option value="2">orang 2</option>
        <option value="3">orang 3</option>
        <option value="3">Orang utan</option>
    </select>

    <label for="Form1">Judul Program</label>
    <div class="form-group">
        <input type="text" class="form-control" id="Form1" value="ini judul program" readonly>
    </div>
    <label for="Form2">Judul Kegiatan</label>
    <div class="form-group">
        <input type="text" class="form-control" id="Form2" placeholder="Masukkan Judul Kegiatan">
    </div>
    <label for="Form2">Target</label>
    <div class="form-group">
        <input type="text" class="form-control" id="Form2" placeholder="Masukkan Quantity Target">
    </div>

    <label for="opt">Pilih Tipe Target</label>
    <select class="form-select" id="opt" aria-label="Default select example">
{{--        <option selected>Pilih Tipe</option>--}}
        <option value="">Juta</option>
        <option value="">Milyar</option>
        <option value="">Orang</option>
        <option value="">Orang/bulan</option>
        <option value="">Produk</option>
        <option value="">Persentase</option>
    </select>
    <label for="Form2">Catatan</label>
    <div class="form-group">
        <input type="text" class="form-control" id="Form2" placeholder="Masukkan Catatan">
    </div>
    <label for="datepicker">Deadline</label>
    <br/>
    <input type="datetime-local" name="deadline" id="datepicker" required>


    <br/>
    <br/>
    <button class="btn btn-primary" type="submit">Submit</button>
    {{--    </form>--}}



</div>
