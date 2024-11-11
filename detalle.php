<?php

include 'conectar.php';

// Obtener el ID de la carrera desde el parámetro GET
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // esta es para la tabla de carreras :p
    $sql_carrera = "SELECT * FROM universidades_carreras WHERE id = $id";
    $result_carrera = $conn->query($sql_carrera);
    $carrera = $result_carrera->fetch_assoc();

     // Esta es de los links 
     $sql_links = "SELECT * FROM links WHERE id = $id";
     $result_links = $conn->query($sql_links);
     $links = $result_links->fetch_assoc();
     $url = htmlspecialchars($links['Link']);// me ayuda para evitar ser atacado :,v
     
    //Aqui info y detalles extras 
    $sql_info = "SELECT `principal_carr`, `informacion_Extra`, `Modo_ingreso`, `perfil_ingreso`, `perfil_Egre`, `puntaje_promedio_2024`, `puntaje_promedio_2023`, `alta_deman` FROM info WHERE id = $id";
    $result_info = $conn->query($sql_info);
    $info = $result_info->fetch_assoc();


    //Aqui es de la  ubicacion
    $sql_ubi = "SELECT * FROM ubicaciones WHERE id = $id";
    $result_ubi = $conn->query($sql_ubi);
    $ubicacion = $result_ubi->fetch_assoc(); 
   

} else {
    echo "ID inválido.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="Principal_in.php">Inicio</a></li>
                <li><a href="Universidades.php">Universidades</a></li>
                <li><a href="CrearOpciones.php">Crea tus Opciones</a></li>
                <li><a href="BusquedaCarrera.php">Busqueda de Carreras</a></li>
                <li><a href="LinksOrientacion.php">Apoyo de Orientacion</a></li>
                <!-- <li><a href=""></a></li> -->
                <li><a href="Acerca.php">Acerca</a></li>
            </ul>
        </nav>
    </header>


    <h1 class="TituloCarr"><?php echo $carrera['nomCarrera']; ?></h1><br>

    <div class="container">
    <!-- Cuadro de izquierda -->
    <div class="left-side">
        
        <?php
           if (isset($info['alta_deman']) && ($info['alta_deman'] === "Alta Demanda")) {
            echo "<nav id='Alta'>
                    <p>¡Carrera de Alta Demanda!</p>
                  </nav>";
        }
        ?>

        <nav id="Ubic">
            <h3 style="text-align: center;">Ubicacion o sede</h3>
            <p><?php echo $ubicacion['Unidad_plantel'];?> </p>
            
        </nav>

        <nav id="Dura">
            <h3 style="text-align: center;">Duración:</h3> 
            <p><?php echo($info['informacion_Extra']) ? $info['informacion_Extra'] : "No disponible"; ?></p>
        </nav>

        <nav id="P24">
            <h3 style="text-align: center;">Puntaje 2024</h3>  
            <p><?php echo ($info['puntaje_promedio_2024']) ? $info['puntaje_promedio_2024']:"No disponible"; ?></body>
        </nav>

        <nav id="P23">
        <h3 style="text-align: center;">Puntaje 2023</h3>  
            <p><?php echo ($info['puntaje_promedio_2023']) ? $info['puntaje_promedio_2023'] : "No disponible"; ?></p>
        </nav>

        <nav id="MetIng">
            <h3 style="text-align: center;">Metodo de Ingreso</h3>  
            <p><?php echo ($info['Modo_ingreso']) ? $info['Modo_ingreso'] : "No disponible"; ?></p>
        </nav>

        <nav id="LinkInfo">
            <p style="text-align: justify;">
            Para saber mas informacion de la carrera como plan de estudios, videos, mapa curricular, perfil profesional etc.
            Ingrese al Link de aqui abajo que te redirecciona al portal oficial de la carrera.</p>
            <?php
                echo "<p style='text-align: center;'><a href='$url' target='_blank'>Link Oficial de La Carrera</a></p>";
            ?>
        </nav>
    </div>

    <!-- Cuadro de la derecha -->
    <div class="right-side">
        <nav id="InformacionCAR">
            <h3>Información de la carrera</h3>
            <p><?php echo isset($info['principal_carr']) ? $info['principal_carr'] :"a"; ?></p>
        </nav>

        <nav id="Ingreso">
            <h3><strong>Perfil de Ingreso</strong></h3>
            <p><?php echo isset($info['perfil_ingreso']) ? $info['perfil_ingreso'] : "No disponible"; ?></p>
        </nav>

        <nav id="Egresado">
            <h3>Perfil de Egresado</h3>
            <p><?php echo isset($info['perfil_Egre']) ? $info['perfil_Egre'] : "No disponible"; ?></p>
        </nav>
    </div>

    <nav>
        <p style="text-align:center">Para retroceder a la pagina anterior solo dele clik
        al la flecha de regresar de su ordenador para continuar explorando</p> 
    </nav>

    </div>
        <footer>
            <p>Derechos reservado, este Programa es desarrollado para el PROYECTO TERMINAL por parte del estudiante Oscar Fiscal Barrera</p>
        </footer>
    </div>    

    
    
</body>
</html>