<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Prueba Técnica</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body>

<div class="container my-3">
    <h1 class="my-3">Valores del dólar del mes</h1>
    <hr>

    <table class="table table-responsive table-hovered">
        <thead>
        <th width="1%">Fecha</th>
        <th>Valor</th>
        </thead>
        <tbody>
            @foreach($data as $row)
                @foreach($row as $day)
                    <tr>
                        <td>{{$day['Fecha']}}</td>
                        <td>{{$day['Valor']}}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
