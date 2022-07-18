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
            Branch
        </legend>
        <br>
        <table border="1">
            <tr>
                <td>branchNo</td>
                <td>bAddress</td>
            </tr>
            @foreach ($branch as $data)
                <tr>
                    <td>{{$data->branchNo}}</td>
                    <td>{{$data->bAddress}}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>