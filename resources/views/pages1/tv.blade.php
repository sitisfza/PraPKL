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
            Stasiun TV
        </legend>
        @foreach($tv as $stasiun)
        Stasiun : {{$stasiun['siaran']}} <br>
        Acara : {{$stasiun['acara']}} <br>
        Jam Tayang : {{$stasiun['jam']}} <br>
        Tanggal Tayang : {{$stasiun['tanggal']}} <br>
        <hr>
        @endforeach
    </fieldset>
</body>
</html>