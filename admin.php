<?php  ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Mendel | Administración</title>

        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 

        <!-- Custom styles -->
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
        
        <!-- The Timeline -->
        <section >
            <button type="button" class="btn btn-primary btn-lg btn-block">Mendel | Histórico de cambios</button>
        </section>
        <ul class="timeline">

            <!-- Item 1 -->
            <li>
                <div class="direction-r">
                    <div class="flag-wrapper">
                        <span class="flag">Demostración</span>
                        <span class="time-wrapper"><span class="time">Febrero 2019</span></span>
                    </div>
                    <div class="desc">Se actualizan las imágenes de prueba por las definitivas, se corrigen algunos errores y fallos en resolución de imagenes, texto, presentación, etc. Se genera la DEMO del sitio web para validación del cliente</div>
                </div>
            </li>

            <!-- Item 2 -->
            <li>
                <div class="direction-l">
                    <div class="flag-wrapper">
                        <span class="flag">Desarrollo</span>
                        <span class="time-wrapper"><span class="time">Enero 2019</span></span>
                    </div>
                    <div class="desc">Se realiza la maquetación del sitio haciendo entregables para validación del diseño, se agregan inicialmente textos e imágenes de prueba con fines demostrativos.</div>
                </div>
            </li>

            <!-- Item 3 -->
            <li>
                <div class="direction-r">
                    <div class="flag-wrapper">
                        <span class="flag">Definición</span>
                        <span class="time-wrapper"><span class="time">Diciembre 2018</span></span>
                    </div>
                    <div class="desc">Definición de requisitos para la maquetación del sitio web</div>
                </div>
            </li>

        </ul>

    </body>
    <footer>
        <!-- Bootstrap core JavaScript -->
        <script src="lib/jquery/jquery.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="js/admin.js"></script>
    </footer>
</html>