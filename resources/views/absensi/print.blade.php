<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Absensi Muhasabah Via Online 2022</title>
    <style>
        header {
            position: relative;
            top: -10px !important;
        }
    </style>
</head>
<body>
        <header align="center">
            <h1 align="center">Rekap Absensi Muhasabah Online 2022</h1>
            <h3 align="center">Ponpes Askhabul Kahfi</h3>
            <hr>
        </header>
        <h2>Total Absensi : {{$total}} </h2>

        @foreach ($absen as $item)
        <table border="0">
                <tr>
                    <td width="10%">Nama</td>
                    <td width="60%">: {{$item->name}} </td>
                    <td align="center" width="30%" rowspan="4">
                        <img src="{{url('/storage')}}/{{ $item->foto }}" width="120" alt="">
                    </td>
                </tr>
                <tr>
                    <td>Nama Wali</td>
                    <td>: {{$item->name_wali}}</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>: {{$item->kelas}}</td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>: {{$item->alamat}}</td>
                </tr>
        </table>
        <hr>
        @endforeach

</body>
<script type="text/javascript">
    window.addEventListener("load", window.print());
  </script>
</html>
