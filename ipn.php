<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ipn</title>
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
            background-color: #ecaead ;
            border-bottom: solid 20px;
            color: black;
        }
        table, th, td {
            border: 2px solid #400605;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
      
        /* Asegúrate de incluir este estilo para todos los <nav> */
        nav {
            margin: 0;
            padding: 0;
            background-color: transparent;
            border: none;
            color: black;
        }

        nav p{
            width: 30%;
            text-align: justify;
            border: 2px solid firebrick; /* Añade un borde */
            border-radius: 8px; /* Bordes redondeados */
            padding: 1rem; /* Relleno interno */
            background-color: #f9f9f9; /* Fondo ligeramente gris */
           
        }

        .mb-4 {
            margin-bottom: 2.5rem !important;
            
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
        <h1 class="ipn">Instituto Politécnico Nacional </h1>
    </header>

    <img src="IPN logoletras.jfif" alt="IPN" class="logosUniIPN">    

    <h2>Carreras</h2>
    <?php include 'prueba3.php'; ?>
    <div>
        <table>
            <thead>
                <tr>
                    
                </tr>
            </thead>
        </table>
    </div>
    <nav class="mb-4 p-3 bg-light">
        <p>
        El Instituto Polictenico Nacial (IPN) fue fundada el 1 de enero de 1936, 
        El total de aspirantes que ingresan al IPN son de 19,416 en este 2024 y tiene un total de 15,716 egresados en el 2022 
        <br><br>
        Su lema es "La Tecnica al Servicio de la Patria."
        </p>
        <p>
            Significado <br><br>
            ICFM = Ingenieria y Ciencias Fisicos Matematicas.<br><br>
            CMB = Ciencias Medico Biologicas.<br><br>
            CSA = Ciencias Sociales y Administrativas.<br><br>
        </p>      
    </nav>

    <nav class="COMOIPN mb-4 p-3 bg-light">
            <h4 id="entrarIPN">¿Como Ingreso a la <span style="color:brown">IPN</span>?</h4>
        <p>    
            Para poder ingresar o ser aceptad@ a cualquiera carrera del IPN se tiene que aplicar el examen de admision
            Contar con el certificado de preparatoria que avale que acreditaste el bachillerato con un promedio mínimo de 7.0.
        </p>
    </nav>

    <nav class="linkuam mb-4 p-3 bg-light">
        <a href="https://www.ipn.mx/">Pagina Oficial del IPN</a>
    </nav>
    <br>
    <nav class="mb-4 p-3 bg-light">
        <p>Total de carreras: 69 </p>
    </nav>
    
</body>
</html>