<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Carreras</title>
    <style>
        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        table, th, td {
            border: 1px solid blue;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        form {
            margin: 20px;
            text-align: center;
        }
        .error {
            text-align: center;
            color: red;
            margin-top: 20px;
        }
        /* input[type="text"] {
            width: 30%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        } */
    </style>
</head>
<body>
    
    <form method="get" action="">
        <label for="carrera">Carrera:</label>
        <input type="text" id="carrera"  name="carrera">
        <br><br>
        <input type="submit" value="Buscar">
    </form>

    <?php
        include 'conectar.php'; 
    
     $carrera = isset($_GET['carrera']) ? $_GET['carrera'] : '';
 
     $sql = "SELECT id, institucion, nomCarrera FROM universidades_carreras WHERE nomCarrera LIKE ?";

        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Agregar comodines al parámetro de búsqueda para la cláusula LIKE
            $likeParam = '%' . $carrera . '%';

            // Vincular los parámetros (s indica que es una cadena de texto)
            $stmt->bind_param("s", $likeParam);

            $stmt->execute();
            $result = $stmt->get_result();

     // Mostrar los resultados
     if ($result && $result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Carrera</th><th>Institución</th></tr>";
            
            // Iterar sobre los resultados
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><a href='detalle.php?id=" . $row['id'] . "'>" . $row['nomCarrera'] . "</a></td>";
                echo "<td>" . $row['institucion'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<div class='error'>
                    No existe esa carrera. Por favor, escriba correctamente el nombre de la carrera que desea conocer.
                  </div>";
        }

        // Cerrar la declaración preparada
        $stmt->close();
        } else {
            echo "Error en la preparación de la consulta.";
        }

   
      $conn->close();
    ?>

    <footer>
         Derechos reservados© Proyecto Terminal II Oscar Fiscal Barrera  UAM 2024
    </footer>
</body>
</html>
