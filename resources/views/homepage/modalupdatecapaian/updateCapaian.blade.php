{{--<form action="" method="post" enctype="multipart/form-data">--}}

{{--</form>--}}

<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Capaian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('updateCp', 1)}}" method="POST">
                    @csrf
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="Form1">Target Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan-id" id="kegiatan-id" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="kegiatan-target" readonly>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroup1">Quantity</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="kegiatan-capaian" id="kegiatan-capaian" placeholder="Masukkan Capaian">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroup2" class="sr-only">Tipe capaian</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="kegiatan-tipetarget" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
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

