<?php

include 'conectar.php';

// Consulta 
$sql = "SELECT * FROM universidades_carreras WHERE institucion = 'UAM'";
$result = $conn->query($sql);

// Filtro
$areaSeleccionada = isset($_GET['area']) ? $_GET['area'] : '';

$sql = "SELECT * FROM universidades_carreras WHERE institucion = 'UAM'";
if ($areaSeleccionada) {
    $sql .= " AND divisionArea = '$areaSeleccionada'";
}

$result = $conn->query($sql);

echo "
<form style='margin-bottom: 20px; display: flex; justify-content: center; align-items: center; margin-top: -30px; margin-left: 740px'>
    <label for='area'>Filtro por division:</label>
    <select name='area' id='area'>
        <option value=''>Todas</option>
        <option value='CSH'" . ($areaSeleccionada == 'CSH' ? ' selected' : '') . ">CSH</option>
        <option value='CAD'" . ($areaSeleccionada == 'CAD' ? ' selected' : '') . ">CAD</option>
        <option value='CBS'" . ($areaSeleccionada == 'CBS' ? ' selected' : '') . ">CBS</option>
        <option value='CCD'" . ($areaSeleccionada == 'CCD' ? ' selected' : '') . ">CCD</option>
        <option value='CNI'" . ($areaSeleccionada == 'CNI' ? ' selected' : '') . ">CNI</option>
        <option value='CBI'" . ($areaSeleccionada == 'CBI' ? ' selected' : '') . ">CBI</option>
    </select>
    <button type='submit'>Filtrar</button>
</form>
";


if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nombre de la Carrera</th><th>Division</th></tr>";
    
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
