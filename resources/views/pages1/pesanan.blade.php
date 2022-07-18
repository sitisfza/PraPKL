<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Pesanan anda : <br>
    {{$material}}
    @if ($material == 'pasir urug')
    -> 50000 <br>
    @elseif ($material == 'batako besar')
    -> 30000 <br>
    @elseif ($material == 'bata merah')
    -> 40000 <br>
    @elseif ($material == 'batu apung')
    -> 65000 <br>
    @else
    <br>
    @endif
    <br>
    Pesanan anda : <br>
    {{$material1}}
    @if ($material1 == 'pasir urug')
    -> 50000 <br>
    @elseif ($material1 == 'batako besar')
    -> 30000 <br>
    @elseif ($material1 == 'bata merah')
    -> 40000 <br>
    @elseif ($material1 == 'batu apung')
    -> 65000 <br>
    @else
    <br>
    @endif
</body>

</html>