@include('navbar')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


<div class="container-fluid py-2 p-5">

    <div class="d-flex align-items-center justify-content-between mb-3 mt-3">
        <h2>List KPI's Target Circle Antum</h2>
        {{--        if auth == executive or admin --}}
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Other Circle
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Creative Technology</a></li>
                <li><a class="dropdown-item" href="#">Kuanta Institute</a></li>
                <li><a class="dropdown-item" href="#">Operation</a></li>
                <li><a class="dropdown-item" href="#">Partnership</a></li>
                <li><a class="dropdown-item" href="#">School Design</a></li>
            </ul>
        </div>
    </div>

    <table class="table table-bordered mt-3">
        <thead class="table-primary">
        <tr style="text-align: center;">
            <th rowspan="2" >No</th>
            <th rowspan="2" >Judul</th>
            <th rowspan="2" >Circle</th>
            <th rowspan="2" >Target</th>
            <th colspan="12">Capaian/bulan</th>
        </tr>
        <tr style="text-align: center;">
            @foreach($month as $num)
              <th>{{$num}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        <tr style="text-align: center;">
            <td class="align-middle">1</td>
            <td class="align-middle">ini judul kpi</td>
            <td class="align-middle">CKI</td>
            <td class="align-middle">10M</td>
            @foreach($month as $num)
                <td class="align-middle">{{$num}}</td>
            @endforeach
        </tr>
        </tbody>
    </table>


</div>
