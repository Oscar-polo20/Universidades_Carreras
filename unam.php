<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAM</title>
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
            background-color:#bbac2c;
            border-bottom: solid 20px;
            color: black;
        }
        table, th, td {
            border: 2px solid blue;

          
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        nav {
            margin: 0;
            padding: 0;
            background-color: white;
            border: none;
            color: blue;
            
          
        }

        nav p{
           
            width: 30%;
            border: 2px solid blue; /* Añade un borde */
            border-radius: 8px; /* Bordes redondeados */
            padding: 1rem; /* Relleno interno */
            background-color: #f9f9f9; /* Fondo ligeramente gris */
          
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
            
        }

        .p-3 {
            padding: 1rem !important;
            
        }

        .bg-light {
            background-color:white !important;
        }
       
        /* body{
            background-color: lightslategrey;
        } */
       
 
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
        <h1 class="unam">Universidad Nacional Autónoma de México</h1>
    </header>

    <img src="UNAM Logo.png" alt="UNAM" class="logosUni">

    <h2>Carreras</h2>
    <?php include 'prueba2.php'; ?>
       
</div>
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
        La Universidad Nacional Autónoma de Mexico (UNAM) fue fundada el 22 de septiembre de 1910. Cuenta con 16 facultades, 9 unidades multidiciplinaria
        y 5 escuelas nacionales, la mayoria estan ubicadas en la "Ciudad Universitaria".
        El total de aspirantes que ingresan son de "223,346" y tiene un total de 34,107 egresados. 
        <br><br>
        Su lema es  "Por mi raza hablara el espiritu"
        </p>
        <p style="text-align: center;">
            Significado <br><br>
            Area 1 = Ciencias Fisico-Matematicas y las ingenierias.<br><br>
            Area 2 = Ciencias Biologicas, Quimicas y de la Salud.<br><br>
            Area 3 = Ciencias Sociales.<br><br>
            Area 4 = Humanidades y Artes.<br><br>
        </p>     
    </nav>
    <nav class="mb-4 p-3 bg-light">
            <h4 id="entrarUNAM">¿Como Ingreso a la <span style="color:rgb(175, 172, 2)">UNAM</span>?</h4>
        <p>    
            Para poder ingresar o ser aceptad@ a cualquiera carrera de la UNAM es por medio de un examen de admision y
            por puntaje, la UNAM se basa por el <span style="color: red">PUNTAJE</span> mas alto obtenido
            en el examen del admision, el puntaje depende de la carrera que se desea entrar. 
            Tambien haber concluido el bachillerato con promedio mínimo de 7.0 en caso de que no, no sera posible ingresar a la UNAM
        </p>
   
  
        <p>
            Algunas Carreras de la UNAM se ingresan por medio del examen de admision o pase reglamentario,
            a expcecion de algunas carreras que tienen <span style="color: blue">PASE DIRECTO</span> es decir,
            que esa carrera solo se ingresa por medio de las prepas de parte de la UNAM y CCh's.
        </p>
    
   
        <a style="text-align: center;" href="https://www.unam.mx/">Pagina Oficial de la UNAM</a> <br>
        <br>
   
   
        <p>Total de carreras: 133 </p>
    </nav>
    

   

</body>
</html>