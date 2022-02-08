<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class='container'>
        <h3>INCIDENCIAS</h3>
        <table class='table table-striped'>
            <thead>
                <th>
                    <td>Latitud</td>
                    <td>Longitud</td>
                    <td>Ciudad</td>
                    <td>Dirección</td>
                    <td>Etiqueta</td>
                    <td>Descripción</td>
                    <td>Estado</td>
                </th>
            </thead>
            <tbody>
                @foreach ($incidencias as $inc)
                    <tr>
                        <td>{{ $inc->latitud }}</td>
                        <td>{{ $inc->longitud }}</td>
                        <td>{{ $inc->ciudad }}</td>
                        <td>{{ $inc->direccion }}</td>
                        <td>{{ $inc->etiqueta }}</td>
                        <td>{{ $inc->descripcion }}</td>
                        <td>{{ $inc->estado }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>