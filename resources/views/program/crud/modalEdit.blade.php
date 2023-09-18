<div class="modal fade" id="editProgram" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Program</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('storeEdit', 1)}}" method="POST">
                    @csrf
                    <div class="d-flex align-items-center justify-content-between">
                        <label for="Form1">Judul Program</label>
                        <input type="text" class="form-control" name="program-id" id="program-id" readonly>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="program-judul" id="program-judul">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroup1">PJ</label>
                                <select class="form-select" name="program-pj-new" aria-label="Default select example">
                                    <option value="nope">Pilih User</option>
                                    @foreach($users as $user)
                                        <option value={{$user->name}}>{{$user->name}}</option>
                                    @endforeach
                                </select>
{{--                                <div class="input-group">--}}
{{--                                    <input type="text" class="form-control" name="program-pj" id="program-pj" placeholder="Masukkan Capaian">--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputGroup2" class="sr-only">PJ saat ini</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="program-pj" id="program-pj" readonly>
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

