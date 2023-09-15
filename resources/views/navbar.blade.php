@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<style>
    .navbar {
        background-color: rgba(0, 169, 255, 0.5) !important;
        border: none !important;
    }

    .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.75);
        font-size: 15px;
        position: relative;
        transition: all 0.4s;
        text-decoration: none;
    }

    .navbar-nav .nav-link:hover {
        color: #2f9d9e;
        text-decoration: underline;
    }
</style>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/home">KUANTA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href='#'>Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='{{route('capaian', \Illuminate\Support\Facades\Auth::user()->circle)}}'>KPI's Capaian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href='{{route('target', "CT")}}'>KPI's Target</a>
                </li>
                <li class="nav-item">
{{--                    <a class="nav-link" href='{{route('dashb', "CT")}}'>Dashboard</a>--}}
                </li>
                <li class="nav-item me-2">
                    <a class='nav-link' href="/logout">logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<script>
    var navLinks = document.querySelectorAll('.nav-link');
    var navbarToggler = document.querySelector('.navbar-toggler');
    var navbarCollapse = document.querySelector('.navbar-collapse');

    navLinks.forEach(function (navLink) {
        navLink.addEventListener('click', function () {
            if (navbarToggler.getAttribute('aria-expanded') === 'true') {
                navbarToggler.click();
            }
        });
    });
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
