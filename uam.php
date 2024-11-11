<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAM</title>
  
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
            width: 50%; /* Ajusta el tamaño de la tabla */
            border-collapse: collapse;
            margin: 30px; /* Margen alrededor de la tabla */
            position: absolute; /* Para posicionar la tabla */
            right: 150px; /* Alineado al lado derecho */
            top: 230px; /* Ajusta el espacio desde la parte superior */
            background-color:bisque;
            border-bottom: solid 20px #0F362D;
            color: black;
        
        }
        table, th, td {
            border: 2px solid goldenrod;
            
        }
        th, td {
            padding: 7px;
            text-align: left;
        }
        nav {
            margin: 0;
            padding: 0;
            /* background-color: green; */
            border: none;
            color: purple;
        }
        nav p{
            width: 30%;
            border: 2px solid green; /* Añade un borde */
            border-radius: 8px; 
           
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }

        .p-3 {
            padding: 1rem !important;
        }

        .bg-light {
            background-color: white !important;
        }

      
        
    </style>
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
                <li><a href="Universidades.php">Regresar</a></li>
            </ul>
        </nav>
        <h1 class="uam">Universidad Autónoma Metropolitana.</h1>

    </header>

        <img src="LogoUAMcolores.jfif" alt="UAM" class="logosUniUAM">

    <h2>Carreras</h2>
    <?php include 'prueba.php'; ?>
    <div >
        <table>
            <thead>
                <tr>
                    
                </tr>
            </thead>
        </table>
    </div>
    <nav class="mb-4 p-3 bg-light">
        <p>
        La Universidad Autonóma Metropolitana (UAM) fue fundada el 1 de enero de 1974, contando con un total de 5 unidades 
        que estan ubicadas en Xochimilco, Iztapalapa, Azcapotzalco, Cuajimalpa y Lerma, su primera unidad fue la de Xochimilco.
        El total de aspirantes que ingresan a la UAM al año son de "7,681" y tiene un total de 207,938 egresados 
        <br><br>
        Su lema es  "In Callli  Ixcahuicopa" que significa "Casa abierta al tiempo"
        </p>
        <p>
            <a style="text-align: center;">Significado</a><br><br>
            CSH = Division de Ciencias Sociales y Humanidades. <br><br>
            CAD = Division de Ciencias y Artes para el Diseño. <br><br>
            CBS = Division de Ciencias Biologicas y de la Salud. <br><br>
            CCD = Division de Ciencias de la Comunicacion y Diseño <br><br>
            CNI = Division de Ciencias Naturales e Ingenieria <br><br>
            CBI = Division de Ciencias Basicas e Ingenieria <br>
        </p>
    </nav>

    <nav class="COMOUAM mb-4 p-3 bg-light">
            <h4 id="entrarUAM">¿Como Ingreso a la <span style="color:blue">UAM</span>?</h4>
        <p>    
            Para poder ingresar o ser aceptad@ a cualquiera carrera de la UAM no se necesita un puntaje, la UAM se basa por el <span style="color: red">PROMEDIO</span> de
            bachillerato y mas el <span style="color:red">PROMEDIO</span> que saque del Examen del admision para Sumar el 100%.
            
        </p>
    </nav>

    <nav class="linkuam mb-4 p-3 bg-light">
        <a href="https://www.uam.mx/index.html">Pagina Oficial de la UAM</a>
    </nav>
    
    <nav class="mb-4 p-3 bg-light">
        <p>*Total de carreras: 82 </p>
    </nav>

    
</body>
</html>