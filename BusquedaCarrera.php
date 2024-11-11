<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="Principal_in.php">Inicio</a></li>
                <li><a href="Universidades.php">Universidades</a></li>
                <li><a href="CrearOpciones.php">Crea tus Opciones</a></li>
                <li><a href="LinksOrientacion.php">Apoyo de Orientacion</a></li>
                <li><a href="Principal_in.php">Regresar</a></li>
                <li><a href="">Acerca</a></li>
            </ul>
        </nav>
        <h1>Buscador de Carreras</h1>
    </header>

    <div class="buscar">
        <p style="text-align:center">Escriba <span style="color: red;">BIEN</span> el nombre de la carrera que desea buscar, al finalizar dar click al boton de buscar y obtendra sus resultados</p>
        <p style="text-align: center">Al finalizar obtendra los resultados y en cual universidad lo imparte</p>

        
    </div>
    <?php
        include 'busqueda.php'; 
    ?>
    
</body>
</html>