

<!-- Modal -->
<div class="modal fade" id="addKpi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD KPI's</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('storeKPI', $circle)}}" method="post">
                    @csrf
                <label for="jp">Judul KPI's</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="kpi-judul" id="jp" placeholder="Masukkan Judul" required>
                </div>
                <label for="jp">circle</label>
                <div class="form-group">
                    <input type="text" class="form-control" name="kpi-circle" id="jp" value="{{$circle}}" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
                </form>
        </div>
    </div>
</div>
