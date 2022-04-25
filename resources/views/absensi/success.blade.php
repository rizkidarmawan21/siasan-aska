<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('adminlte/dist/img/logoaska.png') }}" width="30">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        body {
            background-color: rgb(235, 235, 235)
        }

        .bg-green {
            background-color: rgb(41, 115, 17);
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            padding: 5px;
        }

        .bg-white {
            padding: 10px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .bg-white-radius {
            padding: 15px;
            border-radius: 5px;
            background-color: white
        }

        .bg-white p {
            margin-top: 20px;
            font-size: 15px;
        }

        .box {
            padding: 10px;
        }

    </style>

    <title>Absensi Muhasabah</title>
</head>

<body>
    <div class="container mt-4">
        <div class="mx-auto col-md-8">

            @if (session('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <header class="bg-green"></header>
            <main class="bg-white text-center">
                <h4>Absensi Berhasil Direkam !</h4>
                <p class="text-danger">PERHATIAN !!!</p>
                <p>Jika sudah melakukan absensi dan muncul halaman ini Absensi anda telah direkam oleh sistem. Dimohon untuk <b class="text-warning">tidak mengirim ulang absensi</b> agar tidak terjadi <b>redudanci data atau data double</b>. Terima kasih</p>

    
                    <a href="{{ route('absen-muhasabah') }}" class="btn btn-success btn-block">Kembali ke Absensi</a>
            </main>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
