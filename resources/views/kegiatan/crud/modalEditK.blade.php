<div class="modal fade" id="editKegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kegiatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('storeEditK', 1)}}" method="POST">
                    @csrf
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="Form1">Judul Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan-aidi" id="kegiatan-aidi" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="kegiatan-judul" id="kegiatan-judul">
                    </div>
                    <div class="form-group">
                        <label for="kegiatan-target" class="sr-only">Quantity Target</label>
                        <input type="text" class="form-control" name="kegiatan-target" id="kegiatan-target-int">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroup1">Tipe target</label>
                                <select class="form-select" name="kegiatan-target-new" aria-label="Default select example">
                                    <option value="nope">Pilih Tipe Target</option>
                                    <option value="juta">Juta</option>
                                    <option value="milyar">Milyar</option>
                                    <option value="orang">Orang</option>
                                    <option value="orang/bulan">Orang/bulan</option>
                                    <option value="produk">Produk</option>
                                    <option value="%">Persentase</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroup2" class="sr-only">Tipe target lama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="kegiatan-target-old" id="kegiatan-tipe-target" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kegiatan-catatan" class="sr-only">Catatan</label>
                        <input type="text" class="form-control" name="kegiatan-catatan" id="kegiatan-catatan">
                    </div>
                    <div class="form-group">
                        <label for="kegiatan-deadline" class="sr-only">Deadline</label>
                        <input type="datetime-local" class="form-control" name="kegiatan-deadline" id="kegiatan-deadline">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroup1">Pelaku Baru</label>
                                <select class="form-select" name="kegiatan-user-new" aria-label="Default select example">
                                    <option value="nope">Pilih User</option>
                                    @foreach($users as $user)
                                        <option value={{$user->id}}>{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <label for="inputGroup2" class="sr-only">Pelaku Lama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="kegiatan-user-old" id="kegiatan-user-name" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" class="form-control" name="kegiatan-user-id" id="kegiatan-user-id" readonly>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{--                        <button type="button" class="btn btn-primary">Save changes</button>--}}
                    <button class="btn btn-primary" type="submit">Save Changes</button>
                </div>

            </form>
        </div>
    </div>
</div>

