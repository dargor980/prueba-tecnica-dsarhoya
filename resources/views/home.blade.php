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
        <h1 class="my-3">Consulta valor del dólar de un mes específico</h1>
        <hr>
        <form action="{{route('getValue')}}" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="month">Seleccione mes</label>
                    <input type="month" class="form-control" name="month" required>
                </div>

                <div class="form-group col-md-6">
                    <label for="month">Visualización</label>
                    <select name="type" id="" class="form-control" required>
                        <option value="web">Ver en web</option>
                        <option value="excel">Descargar en excel</option>
                    </select>
                </div>
            </div>
            <div class="row my-3">
                <button type="submit" class="btn btn-success">Consultar valor</button>
            </div>
        </form>
    </div>

    </body>
</html>
