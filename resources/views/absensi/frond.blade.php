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

    <title>Absensi Pembekalan Santri Baru 2022</title>
</head>

<body>
    <div class="container mt-4">
        <div class="mx-auto col-md-7">

            @if (session('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <header class="bg-green"></header>
            <main class="bg-white text-center">
                <h3>Absensi <br> Pembekalan Santri Baru 2022/2023 <br> Ponpes Askhabul Kahfi
                    </h3>
                <p>By : Ponpes Askhabul Kahfi</p>
            </main>
        </div>
        <form method="POST" action="/absensi" enctype="multipart/form-data">
            @csrf
            <div class="mx-auto col-md-7 my-3">
                <div class="bg-white-radius">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror"
                            value="{{ old('name') }}" name="name" placeholder="Masukkan nama lengkap" id="name">

                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mx-auto col-md-7 my-3">
                <div class="bg-white-radius">
                    <div class="form-group">
                        <label for="name_wali">Nama Wali Santri</label>
                        <input type="text" class="form-control form-control-sm @error('name_wali') is-invalid @enderror"
                            value="{{ old('name_wali') }}" name="name_wali" placeholder="Masukkan nama wali"
                            id="name_wali">
                        @error('name_wali')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mx-auto col-md-7 my-3">
                <div class="bg-white-radius">
                    <div class="form-group">
                        <label for="kelas">Jenjang</label>
                        {{-- <input type="text" class="form-control form-control-sm @error('kelas') is-invalid @enderror"
                            value="{{ old('kelas') }}" name="kelas" placeholder="Masukkan kelas" id="kelas"> --}}
                            <select name="kelas" id="kelas" class="form-control form-control-sm @error('kelas') is-invalid @enderror"
                            value="{{ old('kelas') }}">
                                <option disabled selected>--Pilih Jenjang--</option>
                                <option value="SMP 1">SMP 1</option>
                                <option value="SMP 2">SMP 2</option>
                                <option value="SMK">SMK</option>
                                <option value="MTS">MTS</option>
                                <option value="MA">MA</option>
                            </select>
                        @error('kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        {{-- <ul class="mt-2 text-sm">
                            <li class="text-warning"><small>Ex : 10 TKJ2, 8A SMP, Salaf Imrity</small></li>
                        </ul> --}}
                    </div>
                </div>
            </div>
            <div class="mx-auto col-md-7 my-3">
                <div class="bg-white-radius">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat"
                            class="form-control form-control-sm @error('alamat') is-invalid @enderror" cols="30"
                            rows="4">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mx-auto col-md-7 my-3">
                <div class="bg-white-radius">
                    <div class="form-group">
                        <label for="foto">Foto Selfi</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <ul class="mt-2">
                            <li>Foto selfi wali bersama santri</li>
                        </ul>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-success my-3">Kirim Masukan</button>
            </div>

        </form>
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
