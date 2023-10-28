<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Decodigo</title>
</head>
<script>
    // Verifica si jQuery se ha cargado correctamente
    if (typeof jQuery !== 'undefined') {
        $(document).ready(function () {
            // Ejemplo: Cambiar el texto de un elemento
            $('#ejemplo').text('¡jQuery CDN funciona!');
        });
    } else {
        console.log('Error: jQuery no se ha cargado correctamente.');
    }
</script>
<body>
    <h1>Código Fuente Desarrollo Nicolas</h1>
    <div class="container">
        <h2>Ejemplo para bootstrap y variable de PHP: <?=1+4?></h2>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <br>
        <p id="ejemplo" style="color: red;">Este texto será reemplazado por jQuery.</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>