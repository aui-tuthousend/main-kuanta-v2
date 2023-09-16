@include('navbar')
<title>Add Kegiatan</title>
<div class="container py-3">
    <form action="{{ route('storekegiatan', $program->id) }}" method="POST">
        @csrf
    <label for="user">Pilih User</label>
    <select class="form-select" name="user" id="user" aria-label="Default select example">
        <option selected>Pilih User</option>
        @foreach($users as $user)
            <option value={{$user->id}}>{{$user->name}}</option>
        @endforeach
    </select>

    <label for="jp">Judul Program</label>
    <div class="form-group">
        <input type="text" class="form-control" name="jp" id="jp" value={{$program->judul}} readonly>
    </div>
    <label for="jk">Judul Kegiatan</label>
    <div class="form-group">
        <input type="text" class="form-control" name="jk" id="jk" placeholder="Masukkan Judul Kegiatan" required>
    </div>
    <label for="target">Target</label>
    <div class="form-group">
        <input type="text" class="form-control" name="target" id="target" placeholder="Masukkan Quantity Target" required>
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
    <label for="catatan">Catatan</label>
    <div class="form-group">
        <input type="text" class="form-control" name="catatan" id="catatan" placeholder="Masukkan Catatan">
    </div>
    <label for="deadline">Deadline</label>
    <br/>
    <input type="datetime-local" name="deadline" id="deadline" required>
    <br/>
    <br/>
    <button class="btn btn-primary" type="submit">Submit</button>
    </form>



</div>
