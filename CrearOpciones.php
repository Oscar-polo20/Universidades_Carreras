<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Opciones</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        h3 {
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button-container {
            display: flex;
            justify-content: center; /* Centrar horizontalmente */
            margin-top: 20px; /* Espaciado superior */
        }
        button {
            padding: 10px 20px; /* Espaciado dentro del botón */
            background-color: #4CAF50; /* Color de fondo */
            color: white; /* Color del texto */
            border: none; /* Sin bordes */
            border-radius: 5px; /* Bordes redondeados */
            cursor: pointer; /* Cambiar el cursor al pasar */
        }
        button:hover {
            background-color: #45a049; /* Color de fondo al pasar el mouse */
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="Principal_in.php">Inicio</a></li>
                <li><a href="Universidades.php">Universidades</a></li>
                <li><a href="BusquedaCarrera.php">Busqueda de Carreras</a></li>
                <li><a href="LinksOrientacion.php">Apoyo de Orientacion</a></li>
                <li><a href="Principal_in.php">Regresar</a></li>
                <li><a href="">Acerca</a></li>
            </ul>
        </nav>
        <h1>Crear opciones</h1>
    </header>

    <?php
    include 'conectar.php';

    // Consulta 
    $query = "SELECT institucion, nomCarrera FROM universidades_carreras";
    $result = $conn->query($query);
    ?>
    
    <script>
        // Filtra
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('search').addEventListener('keyup', function() {
                const filter = this.value.toLowerCase();
                const items = document.querySelectorAll('#carrera-list li');

                items.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    item.style.display = text.includes(filter) ? '' : 'none';
                });
            });
        });
    </script>

    <div class="container mt-4">
        <form method="post" action="OpcionesCreados.php">
            <h3>Selecciona las carreras que deseas agregar a tu lista:</h3>
            <p>El propósito de "crear opciones" es de crear tu propia lista de opciones de carreras que consideres
                o que quieras estudiar, es bajo tu propio criterio la selección de carreras. Al finalizar
                podras apreciar tu lista de opciones y guardalo en PDF
            </p>

            <input type="text" id="search" placeholder="Buscar carrera..." class="form-control">

            <ul id="carrera-list" class="list-group mt-3">

            <?php while($row = $result->fetch_assoc()): ?>
                <li class="list-group-item">
                    <label>
                        <input type="checkbox" name="opciones[]" value="<?= $row['nomCarrera'] . ' - ' . $row['institucion']; ?>">
                        <?= $row['nomCarrera'] . ' - ' . $row['institucion']; ?>
                    </label>
                </li>
            <?php endwhile; ?>
            </ul>

            <div class="button-container">
                <button type="submit">Agregar a la lista</button>
            </div>
        </form>
    </div>

    <footer></footer>
</body>
</html>
