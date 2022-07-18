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
            Data Belanja
        </legend>
        @foreach ($belanja as $data)
        @php
        $total = 0;
        @endphp
        Nama : {{ $data['nama'] }}<br>
        <br> Jenis Barang :
        @foreach($data['membeli'] as $belikan)
        <li>
            Membeli : {{ $belikan['beli'] }}<br>
            Harga : Rp. {{ $belikan['harga'] }}<br>
        </li>
        @php $total += $belikan['harga'] @endphp
        @endforeach

        <br> Total Belanja : Rp. {{$total}}

        @php
        $cashback;
        if ($total > 500000){
            $cashback = $total * 0.01;
        } elseif ($total > 250000) {
            $cashback = $total * 0.5;
        } else {
            $cashback = 0;
        }
        @endphp

        <!-- @if ($total > 500000 )
        <br> Anda mendapatkan cashback sebesar 10% <br>
        @elseif ($total < 500000) 
        <br> Anda mendapatkan cashback sebesar 5%<br>
        @else
        <br> Anda tidak mendapatkan cashback
        @endif

        @php $cashback = $total * 0.5; @endphp -->

        Total Belanja {{$data['nama']}} :
        {{$cashback}}<br><hr>

        @endforeach
    </fieldset>
</body>

</html>