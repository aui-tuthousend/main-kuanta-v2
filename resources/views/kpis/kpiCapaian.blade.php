@include('navbar')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


<div class="container-fluid py-2 p-5">

    <div class="d-flex align-items-center justify-content-between mb-3 mt-3">
        <h2>List KPI's Circle {{$circle}}</h2>
{{--        if auth == executive or admin --}}
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Other Circle
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{route('capaian', "CT")}}">Creative Technology</a></li>
                <li><a class="dropdown-item" href="{{route('capaian', "KI")}}">Kuanta Institute</a></li>
                <li><a class="dropdown-item" href="{{route('capaian', "OP")}}">Operation</a></li>
                <li><a class="dropdown-item" href="{{route('capaian', "PS")}}">Partnership</a></li>
                <li><a class="dropdown-item" href="{{route('capaian', "SD")}}">School Design</a></li>
            </ul>
        </div>
    </div>
    <ol class="list-group list-group-numbered">
        {{--        <a href='{{route('program', "CT")}}' class="list-group-item">Revenue 3M</a>--}}
        <a href='{{route('program', "Revenue")}}' class="list-group-item">Revenue 3M</a>
        @foreach($kpis as $kpi)
            <a href='{{route('program', $kpi->judul)}}' class="list-group-item">{{$kpi->judul}}</a>

        @endforeach
{{--        judul kpi as parameter  --}}
    </ol>


</div>
