<?php

include 'conectar.php';

//esta pa´ el filtro
$areaSeleccionada = isset($_GET['area']) ? $_GET['area'] : '';

$sql = "SELECT * FROM universidades_carreras WHERE institucion = 'UNAM'";
if ($areaSeleccionada) {
    $sql .= " AND divisionArea = '$areaSeleccionada'";
}

$result = $conn->query($sql);

echo "
<form style='margin-bottom: 20px; display: flex; justify-content: center; align-items: center; margin-top: -30px; margin-left: 759px' method='GET' action=''>
    <label for='area'>Filtro por área:</label>
    <select name='area' id='area'>
        <option value=''>Todas</option>
        <option value='Área 1'" . ($areaSeleccionada == 'Área 1' ? ' selected' : '') . ">Área 1</option>
        <option value='Área 2'" . ($areaSeleccionada == 'Área 2' ? ' selected' : '') . ">Área 2</option>
        <option value='Área 3'" . ($areaSeleccionada == 'Área 3' ? ' selected' : '') . ">Área 3</option>
        <option value='Área 4'" . ($areaSeleccionada == 'Área 4' ? ' selected' : '') . ">Área 4</option>
    </select>
    <button type='submit'>Filtrar</button>
</form>
";


if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nombre de la Carrera</th><th>Área</th></tr>"; 
    
    // Iterar sobre los resultados
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> <a href='detalle.php?id=" . $row['id'] . "'>" . $row['nomCarrera'] . "</a></td>";
        echo "<td>" . $row['divisionArea'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>


