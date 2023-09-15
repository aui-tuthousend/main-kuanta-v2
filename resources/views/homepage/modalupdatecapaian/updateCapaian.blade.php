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
                <form>
                    <label for="Form1">Target Kegiatan</label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Form1" value="{{$keg->target}}" readonly>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroup1">Quantity</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputGroup1" value="{{$keg->capaian}}" placeholder="Masukkan Capaian">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroup2" class="sr-only">Tipe capaian</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{$keg->tipe_target}}" id="inputGroup2" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

