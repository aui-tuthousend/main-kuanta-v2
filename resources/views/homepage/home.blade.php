<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
    {{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
</head>
<body>
    @include('navbar')
    <div class="container-fluid py-2 p-5">
        @yield('content')
    </div>

    <script type="text/javascript">

        $(document).ready(function () {

            $('body').on('click', '#show-user', function () {
                var userURL = $(this).data('url');
                $.get(userURL, function (data) {
                    console.log(data);
                    $('#update').modal('show');
                    $('#kegiatan-id').val(data.id);
                    $('#kegiatan-target').val(data.target);
                    $('#kegiatan-capaian').val(data.capaian);
                    $('#kegiatan-tipetarget').val(data.tipe_target);

                    // $('#update-form').submit();
                })
            });

        });
    </script>
    <style>
        #kegiatan-id {
            width: 35px; /* Ganti dengan panjang yang Anda inginkan, misalnya 200px */
            background-color: transparent;
            border: none;
            color: white;
        }
    </style>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
