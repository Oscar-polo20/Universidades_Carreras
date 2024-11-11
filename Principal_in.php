<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidades y Carreras</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <style>
        body {
            background-color: lightgray; 
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
                <li><a href="Acerca.php">Acerca</a></li>
            </ul>
        </nav>
        <h1 id="IntroT">
            Universidades y Carreras de la CDMX
        </h1>
    </header>

    <nav class="inicio">
        <p>
            ¡Bienvenid@! a (UniCarr)! <br> 
            Este proyecto tiene como proposito de informar y dar conocer todas las carreras para aquellos que no saben
            que estudiar y tambien para los aspirantes que van a entrar a una universidad.
            En la ciudad de Mexico hay un total de 348 Universidades, pero las que son mas demandadas son la UAM, UNAM e IPN
            En este Proyecto_Terminal estan todas sus carreras que son un total de 277 carreras por parte de estas 3 universidades.
        </p>
        <!-- <p url="https://www.unam.mx/">UNAM</p>
        <p>UAM</p>
        <p>IPN</p> -->
    </nav>

    <br><br><br>

    <div style="text-align: center; font-size: larger;" >
        <p>

            Mapa de la ciudad de México y del Estado de México, aqui puedes buscar la universidad que desee conocer,
            tambien puedes agregar una ubicacion para su busqueda.
            El buscador no puede fijar la ubicacion que ingrese, solo se acercara al area aproximado.
        </p>
    </div>
    



    <!-- Para agregar una Busqueda de ubicacion para el mapa xD-->

    <div class="grid-template-column-3-4">
        <div>
            <div id="map"></div>
        </div>

        <div class="bg-gray d-flex justify-content-center mt-1" style="position: relative; left: -20px;">
            <input type="text" id="place-input" class="input" placeholder="Escribe una direccion" />
            <button id="clear-btn" class="clear-btn">Limpiar</button>
        </div>
    </div>

    <div id="mapa-container">
        <!-- <div id="map"> </div> --> 
    </div>
    <br><br>

    <script type="module" src="./main.js"></script>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD970UK-F4zCJWj0E4ZInpZvX-H-0kFyiw&loading=async&libraries=places&callback=initMap"
      defer>
    </script>

    <footer>
        <p>
            Derechos reservados© Proyecto Terminal II Oscar Fiscal Barrera  UAM 2024
        </p>
    </footer>
   
    
</body>
</html>