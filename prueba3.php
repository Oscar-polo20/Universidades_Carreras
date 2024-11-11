<?php
// Incluir el archivo de conexión
include 'conectar.php';


//son para el filtro
$areaSeleccionada = isset($_GET['area']) ? $_GET['area'] : '';

$sql = "SELECT * FROM universidades_carreras WHERE institucion = 'IPN'";
if ($areaSeleccionada) {
    $sql .= " AND divisionArea = '$areaSeleccionada'";
}

$result = $conn->query($sql);

echo "
<form style='margin-bottom: 20px; display: flex; justify-content: center; align-items: center; margin-top: -30px; margin-left: 763px' method='GET' action=''>
    <label for='area'>Filtro por área:</label>
    <select name='area' id='area'>
        <option value=''>Todas</option>
        <option value='ICFM'" . ($areaSeleccionada == 'ICFM' ? ' selected' : '') . ">ICFM</option>
        <option value='CMB'" . ($areaSeleccionada == 'CMB' ? ' selected' : '') . ">CMB</option>
        <option value='CSA'" . ($areaSeleccionada == 'CSA' ? ' selected' : '') . ">CSA</option>
    </select>
    <button type='submit'>Filtrar</button>
</form>
";

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nombre de la Carrera</th><th>Area</th></tr>"; // Cambia los nombres de las columnas según tu tabla
    
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
