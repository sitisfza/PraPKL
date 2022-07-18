<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Siswa
        </legend>
        @foreach ($siswa as $murid)
            Id : {{$murid['id']}} <br>
            Nama : {{$murid['nama']}} <br>
            Umur : {{$murid['umur']}} <br>
            Status :
            @if($murid['umur'] >= 17)
                Anda berhak mendapatkan SIM
            @else
                Anda belum berhak mendapatkan SIM
            @endif
            <br>
            Kelas : {{$murid['kelas']}} <br>
            Daftar Mata Pelajaran :
            @foreach ($murid['mapel'] as $mapel)
                <li>{{$mapel}}</li>
            @endforeach
            <hr>
        @endforeach
    </fieldset>
</body>
</html>