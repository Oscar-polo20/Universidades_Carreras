<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Opciones Seleccionadas</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;     
            background-color: #f4f4f4;
        }
        h3 {
            color: #333;
        }
        body > ul {
            list-style-type: none;
            padding: 0;
        }
        body > li {
            background: #fff;
            margin: 10px 0;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        body > a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
        .button-container {
            text-align: center; 
            margin-top: 20px; 
        }
        .btn-generate-pdf {
            margin-top: 10px; 
        }
        .regresar-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .regresar-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="Principal_in.php">Inicio</a></li>
                <li><a href="Universidades.php">Universidades</a></li>
                <li><a href="BusquedaCarrera.php">Búsqueda de Carreras</a></li>
                <li><a href="LinksOrientacion.php">Apoyo de Orientación</a></li>
                <li><a href="Principal_in.php">Regresar</a></li>
                <li><a href="">Acerca</a></li>
            </ul>
        </nav>
        <h1>Carreras Seleccionadas</h1>
    </header>

    <div class="main-content">
        <?php
            // revisa que se envie bien
            if (isset($_POST['opciones']) && !empty($_POST['opciones'])) {
                echo '<h3>Has seleccionado las siguientes carreras:</h3>';
                echo '<ul>';
                foreach ($_POST['opciones'] as $opcion) {
                    echo '<li>' . htmlspecialchars($opcion) . '</li>';
                }
                echo '</ul>';
            }
        ?>
    </div>

    <div class="button-container">
        <a href="CrearOpciones.php" class="regresar-btn">Regresar a seleccionar más opciones</a>
        <form action="PDF.php" method="post">
            <?php
            if (isset($_POST['opciones']) && !empty($_POST['opciones'])) {
                foreach ($_POST['opciones'] as $opcion) {
                    echo '<input type="hidden" name="opciones[]" value="' . htmlspecialchars($opcion) . '">';
                }
            }
            ?>
            <button type="submit" class="btn-generate-pdf">Generar PDF</button>
        </form>
    </div>

    <footer></footer>

</body>
</html>