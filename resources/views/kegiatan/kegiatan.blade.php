<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
@include('navbar')
<div class="container-fluid py-2 p-5">
    @yield('indexkegiatan')
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('body').on('click', '#edit-kegiatan', function () {
            var userURL = $(this).data('url');
            $.get(userURL, function (data) {
                console.log(data);
                $('#editKegiatan').modal('show');
                $('#kegiatan-aidi').val(data.id);
                $('#kegiatan-judul').val(data.judul);
                $('#kegiatan-target-int').val(data.target_int);
                $('#kegiatan-tipe-target').val(data.tipe_target);
                $('#kegiatan-catatan').val(data.catatan);
                $('#kegiatan-deadline').val(data.deadline);
                $('#kegiatan-user-name').val(data.user_name);
                $('#kegiatan-user-id').val(data.id_user);
                // $('#update-form').submit();
            })
        });

    });
</script>
<style>
    #kegiatan-id, #kegiatan-user-id, #kegiatan-aidi {
        width: 35px; /* Ganti dengan panjang yang Anda inginkan, misalnya 200px */
        background-color: transparent;
        border: none;
        color: white;
    }

    #del-button-k {
        margin-top: 17px;
    }
</style>
</body>
</html>
