<?php 
 ?>
<!DOCTYPE <html>
</html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mendel | Especialistas en Genética Molecular</title>
    <link rel="icon" type="image/png" href="img/cropped-logo.png">
    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 

    <!-- Plugin CSS -->
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="css/index.css">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <style>
        #mainNav {
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <img src="img/logo.png" alt="" width="250" height="70">
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger menu" href="#AboutUs" style="color: rgb(52, 96, 148);"> Nosotros</a>
            </li>
            <!--<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#citogenetica" style="color: rgb(52, 96, 148);">
                Servicios
              </a>
            </li>-->
            <li class="nav-item dropdown">
                <a class="nav-link js-scroll-trigger dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: rgb(52, 96, 148);">
                  Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#services" style="color: rgb(52, 96, 148);">Citogenética Clásica</a>
                  <a class="dropdown-item" href="" data-toggle="modal" data-target="#modal-fish" style="color: rgb(52, 96, 148);">Citogenética Molecular (FISH)
                    </a>
                  <a class="dropdown-item" href="" data-toggle="modal" data-target="#modal-biologia_molecular" style="color: rgb(52, 96, 148);">Biología molecular</a>
                  <a class="dropdown-item" href="" data-toggle="modal" data-target="#modal-citometria_fllujo" style="color: rgb(52, 96, 148);">Citometría de flujo</a>
                  <a class="dropdown-item" href="" data-toggle="modal" data-target="#modal_tabla_clinicos" style="color: rgb(52, 96, 148);">Laboratorio clínico</a>
                </div>
              </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#" style="color: rgb(52, 96, 148);">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="blog.php" style="color: rgb(52, 96, 148);">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact" style="color: rgb(52, 96, 148);">Contacto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#" style="color: rgb(52, 96, 148);">Buscar</a>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact" style="color:black;">Contacto</a>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex" style="margin-top: 5%;">
      <!--<div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Your Favorite Source of Free Bootstrap Themes</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>-->
      <div id="carrusel" class="containerSlide">
          <div class="slider">
              <div class="slide slide2">
                  <div class="caption">
                      <h2>Citogenética clásica</h2>
                      <p>Estudio del material genético condensado en cromosomas.</p>
                  </div>
              </div>
              <div class="slide slide3">
                  <div class="caption">
                      <h2>Citogenética molecular (FISH)</h2>
                      <p>Hibridación fluorescente en el sitio cromosómico de interés utilizando sondas específicas de DNA.</p>
                  </div>
              </div>
              <div class="slide slide1">
                  <div class="caption">
                      <h2>Biología molecular</h2>
                      <p>
                          Análisis del genoma humano y sus variaciones con importancia clínica
                      </p>
                  </div>
              </div>
              <div class="slide slide5">
                  <div class="caption">
                      <h2>Citometría de flujo</h2>
                      <p>Estudio de las características que diferencian a las células.</p>
                  </div>
              </div>
              <div class="slide slide4">
                  <div class="caption">
                      <h2>Laboratorio Clínico</h2>
                      <p>Estudios de productos del metabolismo para valorar la salud del paciente.</p>
                  </div>
              </div>
              
          </div>
      </div>

      <style>
        .containerSlide {
	position: relative;
	overflow: hidden;
	width: 100%;
	height: 80vh;
}
.containerSlide .slider {
	position: absolute;
	top: 0;
	left: 0;
	width: 500%;
	height: 100%;
	animation: animate 10s linear infinite;
}
.containerSlide .slider .slide {
	position: relative;
	width: 20%;
	height: 100%;
	float: left;
}
.containerSlide .slider .slide .caption { 
	position: absolute;
	bottom: 60px;
	right: 60px;
	left: 60px;
	padding: 30px;
	background-color: rgba(0,0,0,.5);
	box-sizing:border-box;
	transition: 5s;
}
.containerSlide .slider .slide .caption h2 { 
	margin: 0;
	padding: 0;
	color: #fff;
	font-size: 48px;
	transition: 5s;
}
.containerSlide .slider .slide .caption p { 
	margin: 0;
	padding: 0;
	color: #fff;
	font-size: 18px;
	transition: 5s;
}
.containerSlide .slider .slide.slide1 {
	/* background: url(img/slider.jpg); */
	background: url(img/slider_img/biologia_molecular.jpg);
	background-size: cover;
	background-position: center;
}
.containerSlide .slider .slide.slide2 {
	/* background: url(img/slider2.jpg); */
	background: url(img/slider_img/citogenetica.jpg);
	background-size: cover;
	background-position: center;
}
.containerSlide .slider .slide.slide3 {
	background: url(img/cover_images/FISH.jpg);
	background-size: cover;
	background-position: center;
}
.containerSlide .slider .slide.slide4 {
	background: url(img/cover_images/clinicos.jpg);
	background-size: cover;
	background-position: center;
}

.containerSlide .slider .slide.slide5 {
	/* background: url(img/slider3.jpg); */
	background: url(img/slider_img/citometria.jpg);
	background-size: cover;
	background-position: center;
}


@keyframes animate {
	0% {
		left: 0;
	}
	15% {
		left: 0;
	}
	20% {
		left: -100%;
	}
	35% {
		left: -100%;
	}
	40% {
		left: -200%;
	}
	55% {
		left: -200%;
	}
	60% {
		left: -300%;
	}
	75% {
		left: -300%;
	}
	80% {
		left: -400%;
  }
  95% {
		left: -400%;
  }
  1005% {
		left: -500%;
	}
}



@media screen and (max-width: 768px) {
	.containerSlide .slider .slide .caption { 
		bottom: 20px;
		right: 20px;
		left: 20px;
		padding: 20px;
	}
	.containerSlide .slider .slide .caption h2 { 
		margin: 0 0 10px;
		font-size: 30px;
	}
	.containerSlide .slider .slide .caption p { 
		font-size: 16px;
	}
}
      </style>
    </header>

    <section id="AboutUs">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Sobre nosotros</h2>
            <hr class="my-4">
            <p class="mb-5">
                Mendel inicia sus actividades en la ciudad de Morelia, Michoacán el día 4 de abril de
                2004. La empresa cuenta con un servicio de laboratorio que atiende las necesidades de
                diagnóstico genético en las disciplinas de citogenética clásica, citogenética molecular,
                biología molecular, citometría de flujo y laboratorio clínico siendo la primera empresa de su tipo establecida
                en el estado de Michoacán.
            </p>
            <a id="enlace-aviso_privacidad" data-toggle="modal" data-target="#modal-aviso_privacidad">
              <strong style="color: rgb(52, 96, 148);">Aviso de Privacidad</strong>
            </a>
            <p></p>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-6 ml-auto text-justify">
              <strong>MISIÓN</strong>
              <p>
                  Transformar el cuidado de la salud generando bienestar en cada familia a través de servicios de diagnóstico que garanticen valor y conocimiento.
              </p>
            </div>
            <div class="col-lg-6 ml-auto text-justify">
              <strong>VISIÓN</strong>
              <p>
                  Ser la entidad corporativa líder en diagnóstico genético molecular, reconocida por su compromiso social y la calidad humana impresa en los servicios que ofrece.
              </p>
            </div>
          </div>
          <section class="bg-primary">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 mx-auto text-center">
                  <img src="img/EMA.jpg" alt="" width="300" height="200">
                </div>
                <div class="col-lg-8 mx-auto text-center">
                  <h2 class="section-heading text-white">Acreditación</h2>
                  <hr class="light my-4">
                  <p class="text-faded mb-4">
                      En 2015 Mendel es el primer laboratorio de citogenética en el país acreditado bajo la norma NMX-EC-15189-IMNC-2015 (Requisitos de la calidad y competencia de los laboratorios clínicos) y en 2016 amplia el alcance a las áreas de biología y citogenética molecular.
                  </p>
                  <a class="btn btn-light btn-xl js-scroll-trigger" data-toggle="modal" data-target="#modal-acreditacion_ema">Saber más!</a>
                </div>
              </div>
            </div>
          </section>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Citogenética clásica</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <!--<i class="fas fa-4x fa-clipboard-list text-primary mb-3 sr-icon-1"></i>-->
              <img id="img-pregnant" src="img/pregnant.jpg" alt="" width="100" height="100">
              <br>
              <h3 class="mb-3" style="cursor: pointer;">PRE-POSTNATAL</h3>
              <p class="text-muted mb-0" style="text-align: justify;">
                  Diagnóstico de anomalías congénitas de órganos y/o sistemas del ser humano, retraso mental, retraso en el
                  desarrollo, trastornos reproductivos como infertilidad, abortos espontáneos, entre
                  otros..
              </p>
              <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-pre_postnatal">
                  <i class="fa fa-check" aria-hidden="true"></i> Saber más
              </button>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <img src="img/mendel-background.jpg" class="img-circle" width="100" height="100">
              <h3 class="mb-3" style="cursor: pointer;">ONCOHEMATOLÓGICA</h3>
              <p class="text-muted mb-0" style="text-align: justify;">
                  El análisis citogenético es el estudio de los cromosomas de las células en metafase.
                  Las anomalías cromosómicas pueden deberse a defectos en la estructura o a
                  modificaciones en el número de los cromosomas.
              </p>
              <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#modal-oncohematologia">
                  <i class="fa fa-check " aria-hidden="true"></i> Saber más
              </button>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container" style="margin-top: 10%;">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Citogenética molecular</h2>
              <hr class="my-4">
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 text-center">
                <img src="img/cito-molecular.jpg" class="img-circle" width="100" height="100">
              </div>
              <div class="col-lg-12 col-md-12 text-justify">
                  <p class="text-muted mb-0">
                      A la par de la Citogenética Clásica, la parte molecular de la citogenética ayuda a resaltar partes puntuales o específicas de la doble hélice, determinando la presencia o ausencia de material genético relacionado a una alteración patológica o enfermedad.
                  </p>
                  <p>
                      Las metodologías de citogenética molecular como lo es la Hibridación Genómica Comparativa (GCH), Hibridación Fluorescente In Situ (FISH) y sus variantes, son herramientas complementarias de gran aplicación en el diagnóstico clínico de enfermedades genéticas y genómicas.
                  </p>
                  <p>
                      La citogenética molecular complementa perfectamente a la citogenética clásica en todas aquellas situaciones en las que no ha sido posible realizar un cariotipo: al disponer de metafases de poca calidad, o no haber obtenido metafases, o bien en los casos en los que las alteraciones cromosómicas asociadas a un diagnóstico son crípticas no visibles en el cariotipo, como el caso de la t(12;21) en leucemia aguda linfoblástica(LLA).
                  </p>
              </div>
            </div>
          </div>
        </div>

        <div class="container" style="margin-top: 10%;">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Citometría de flujo</h2>
              <hr class="my-4">
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 text-center">
                <img src="img/Cito.png" class="img-circle" width="100" height="100">
              </div>
              <div class="col-lg-12 col-md-12 text-justify">
                  <p class="text-muted mb-0">
                       Citometría de Flujo es un método utilizado en laboratorios de alta especialidad que se basa en el uso de luz laser que incide sobre células transportadas por un flujo continuo y ordenado de líquido envolvente; con el objeto de conocer las características distintivas de una población celular; es decir, nos ayuda a conocer la cantidad, tamaño, complejidad y presencia de biomarcadores.
                  </p>
                  <br>
                  <p class="text-muted mb-0">
                      El tiempo de proceso de estos estudios es de 4 días hábiles y el tipo de muestra que se requiere es Médula ósea (Extraída por médico hematólogo) y sólo para la SUBPOBLACIÓN DE LINFOCITOS CD4/CD8 se requiere sangre periférica. 
                  </p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Nuestro catálogo completo de servicios!</h2>
        <!--<a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>-->
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box ir-arriba" href="#">
              <!--<img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">-->
              <img class="img-fluid" src="img/portfolio/thumbnails/custom_logo_resizer.jpg" width="100%">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Volver a inicio
                  </div>
                  <div class="project-name text-justify">
                    
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" data-toggle="modal" data-target="#modal-fish">
              <img class="img-fluid" src="img/cover_images/FISH.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Citogenética molecular (FISH)
                  </div>
                  <div class="project-name text-justify">
                      Hibridación fluorescente en el sitio cromosómico de interés utilizando sondas específicas de DNA
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" data-toggle="modal" data-target="#modal-biologia_molecular">
              <img class="img-fluid" src="img/cover_images/Mendel Banners 21.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                      Biología molecular
                  </div>
                  <div class="project-name text-justify">
                      Ofrece la detección de enfermedades
                      infecciosas a través de la detección de virus, tales como el VPH, VIH, VHB, entre otros.
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="#" data-toggle="modal" data-target="#modal-citometria_fllujo">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                      Citometría de flujo
                  </div>
                  <div class="project-name text-justify">
                      Método que nos ayuda a conocer la cantidad, tamaño, complejidad y presencia de biomarcadores.
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" data-toggle="modal" data-target="#modal_tabla_clinicos">
              <img class="img-fluid" src="img/cover_images/clinicos.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Laboratorio clínico
                  </div>
                  <div class="project-name text-justify">
                    Ofrecemos examenes de: Hematología, Inmunología y bioquímica sanguínea.
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="#" onclick="toBlog();">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Blog
                  </div>
                  <div class="project-name text-justify">
                    En nuestro blog, podrá iniciar temas de conversación con nuestros cientes, revisar testimonios de satisfacción, etc.
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Póngase en contacto con nosotros!</h2>
            <hr class="my-4">
            <p class="mb-5">
              Nuestra prioridad es atenderle de forma eficiente y con el profesionaismo que nos caracteriza ...
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 ml-auto text-center">
              <div class="map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.3347639263216!2d-101.19058828555936!3d19.698366786733875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0e74694cb3e5%3A0x636151d9b30ed40!2sCalle+Ortega+y+Monta%C3%B1es+327%2C+Centro+Hist%C3%B3rico%2C+58000+Morelia%2C+Mich.!5e0!3m2!1ses-419!2smx!4v1547445847975" width="100%" height="650" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-lg-5 ml-auto text-center">
              <div class="contact-form">
                  <h1 class="title">¿Dudas, comentarios, sugerencias?</h1>
                  <h2 class="subtitle">Su opinión es lo más importante para nosotros.</h2>
                  <form action="">
                    <input id="_inputNombre" type="text" name="name" class="form-control" placeholder="Nombre completo" />
                    <input id="_inputMail" type="email" name="e-mail" class="form-control" placeholder="Correo electrónico" />
                    <input id="_inputtel" type="tel" name="phone" class="form-control" placeholder="Número de teléfono"/>
                    <textarea id="_inputcomentario" name="text" id="" class="form-control" rows="4" placeholder="Escriba aquí su mensaje"></textarea>
                    <button type="button" class="btn-send" style="background-color: rgb(52, 96, 148);" onclick="sendMail();">Enviar</button>
                  </form>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row"> 
          <div class="col-lg-3 ml-auto text-center" style="color: rgb(52, 96, 148);">
            <i class="fas fa-home fa-3x mb-3 sr-contact-1"></i>
            <p>Ortega y Montañez No. 327</p>
            <p>Col. Centro</p>
            <p>Morelia, Michoacán.</p>
          </div>
          <div class="col-lg-3 ml-auto text-center" style="color: rgb(52, 96, 148);">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p style="font-family: Helvetica, Arial, sans-serif;">
                <i class="fa fa-phone-volume"></i> (443) 320 2644</p>
            <p style="font-family: Helvetica, Arial, sans-serif;">
                <i class="fa fa-phone-volume"></i> (443) 317 5103</p>
            <p style="font-family: Helvetica, Arial, sans-serif;">
                <i class="fa fa-whatsapp"></i> (443) 528 0357</p>
          </div>
          <div class="col-lg-3 mr-auto text-center" style="color: rgb(52, 96, 148);">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:contacto@mendel.mx" style="color: rgb(52, 96, 148);"> contacto@mendel.mx</a>
              <a href="mailto:laboratoriosmendel@hotmail.com" style="color: rgb(52, 96, 148);"> laboratoriosmendel@prodigy.net.mx</a>
            </p>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
                <div class="box-part text-center">
                              
                              <i class="fa fa-facebook fa-3x" aria-hidden="true"></i>
                              
                  <div class="title">
                    <a class="social" href="https://www.facebook.com/mendelab" target="_blank" style="color: #fff; text-decoration: none;">facebook.com/mendelab</a>
                  </div>        
                 </div>
              </div>	 
              <style>
                @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700');

                body{
                    background: #f2f2f2;
                    font-family: 'Josefin Sans', sans-serif;
                }

                h3{
                    font-family: 'Josefin Sans', sans-serif;
                }

                .box{
                    padding:60px 0px;
                }

                .box-part{
                    background: rgb(52, 96, 148);
                    color: #fff;
                    border-radius:10px;
                    padding:60px 10px;
                    margin:30px 0px;
                }

                .box-part:hover{
                    cursor: pointer;
                }

                .social:hover {
                  color:#FFF;
                    -webkit-transition: all 1s ease-out;
                    -moz-transition: all 1s ease-out;
                    -o-transition: all 1s ease-out;
                    transition: all 1s ease-out;
                }

                .box-part:hover .fa , 
                .box-part:hover .title , 
                .box-part:hover .title .social ,
                .box-part:hover .social{
                    color:#FFF;
                    -webkit-transition: all 1s ease-out;
                    -moz-transition: all 1s ease-out;
                    -o-transition: all 1s ease-out;
                    transition: all 1s ease-out;
                }

                .text{
                    margin:20px 0px;
                }
              </style>
        </div>
      </div>
    </section>

    <!-- Sección de ventanas modales-->
    <section>
      <div id="modal-aviso_privacidad" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <embed src="docs/AvisoPrivacidad-2019.pdf">
          </div>
        </div>
      </div>

      <div id="modal-acreditacion_ema" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <embed src="docs/EMA.pdf">
            </div>
          </div>
        </div>

      <div id="modal-pre_postnatal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xs">
          <div class="modal-content">
            <img src="img/cover_images/pre post.jpg" alt="" class="modal-img_header">
            <div class="modal-body texto_descripcion" id="pre_postnatal_body">
              <br>
                <p>
                Es el diagnóstico de anomalías congénitas de órganos y/o sistemas del ser humano
                (sistema nervioso, circulatorio, respiratorio, digestivo, urinario, osteomuscular,
                ojos, oídos, cara, cuello, órganos genitales), retraso mental, retraso en el
                desarrollo, trastornos reproductivos como infertilidad, abortos espontáneos, entre
                otros; los cuales pueden ser diagnosticados durante la etapa prenatal (periodo
                fetal del ser humano) o la etapa postnatal (infancia, pubertad, adolescencia,
                madurez).
                </p>
                <p>
                    <strong style="color: rgba(12, 125, 201, 0.781);">Todos los estudios están acreditados bajo la norma NMX-15189-2015
                     (ISO 15189-2012).</strong> 
                </p>
                <h5>ESTUDIOS MENDEL DEL SERVICIO PRE-POSTNATAL:</h5>
                <p>
                <strong>Cariotipo regular en sangre periférica</strong> se indica en la detección de alteraciones
                cromosómicas numéricas y estructurales, malformaciones físicas con o sin retraso
                mental, retraso en el desarrollo, ambigüedad de genitales, desarrollo inadecuado
                de caracteres sexuales secundarios e infertilidad. Es básico para el diagnóstico de
                síndromes cromosómicos como el Síndrome de Down (trisomía 21), Edwards
                (trisomía 18), Patau (trisomia 13), Klinefelter (XXY), Turner (monosomía del
                cromosoma X), entre otros.
                </p>
                <p>
                <strong>Cariotipo de alta resolución en sangre periférica</strong> se indica en pacientes con
                diversos trastornos del desarrollo físico o mental, así como con trastornos de la
                diferenciación sexual, esterilidad o infertilidad. Se buscan pequeños segmentos de
                los cromosomas que estén ausentes o duplicados en cada uno de ellos, para
                determinar una correlación clínica con síndromes de microdeleción cromosómica,
                tales como Prader-Willi, Cridu-chat, Williams, entre otros.
                
                </p>
                <p>
                <strong>Cariotipo en líquido amniótico</strong> consiste en extraer un volumen especifico de
                líquido del saco que rodea al feto en el vientre (líquido amniótico), entre la semana
                14 y 20 del embarazo. Lo realiza un especialista en un consultorio médico, en un
                quirófano o en un centro médico. Este estudio ayuda a diagnosticar problemas del
                cierre del tubo neural como espina bífida y anencefalia (ausencia parcial o total del
                cerebro o cráneo), trisomías (tres cromosomas de cada tipo, normalmente son
                dos) del cromosoma 13,18 y 21 así como alteraciones cromosómica estructurales
                balanceadas o desbalanceadas.
                </p>
                <p>
                <strong>Cariotipo en biopsia de producto de concepción</strong> ayuda a confirmar o descartar
                una anormalidad cromosómica como causa de la pérdida del embarazo. Un aborto
                espontáneo (o aborto involuntario) es la pérdida del feto. Entre un 10 a un 20% de
                los embarazos confirmados terminan en un aborto espontáneo y más del 80% de
                estas pérdidas suceden antes de las 12 semanas. Alrededor de 50% de los
                abortos espontáneos que tienen lugar durante el primer trimestre son el resultado
                de anomalías cromosómicas en el feto. Las parejas que han tenido dos o más
                abortos consecutivos tienen más probabilidades de ser portadores de arreglos
                estructurales en sus cromosomas que propicien tener un embarazo afectado que
                se pueda perder durante el primer trimestre.
                </p>
            </div>
          </div>
        </div>
      </div>

      <div id="modal-oncohematologia" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <img src="img/cover_images/onco.jpg" alt="" class="modal-img_header">
              <div class="modal-body texto_descripcion" id="oncohematologia_body">
                <br>
                  <h5>Mendel es el primer laboratorio en el país que obtiene una acreditación en el área de
                    citogenética clásica.</h5>
                  <p>    
                      Utilidad diagnostica de un Cariotipo Oncológico en una muestra de médula ósea o en
                      sangre periférica: establecer y/o confirmar el diagnóstico, establecer un pronóstico y
                      monitorear la respuesta al tratamiento en anemias, leucemias y linfomas; asimismo
                      para establecer la aceptación o el rechazo al trasplante.
                  </p>
                  <p>
                     <strong style="color: rgb(12, 125, 201);">Todos los estudios están acreditados bajo la norma NMX-15189-2015
                      (ISO 15189-2012).</strong> 
                  </p>
                  <p>
                      Algunos de los diagnósticos en los cuales está indicado realizar el Cariotipo Oncológico
                      son:
                  </p>
                  <ul>
                    <li>Leucemia Linfoblástica Aguda de células B y/o T.</li>
                    <li>Leucemia Mieloide Aguda.</li>
                    <li>Leucemia Mieloide Crónica.</li>
                    <li>Síndrome Mielodisplásico.</li>
                    <li>Mieloma Múltiple.</li>
                    <li>Linfomas, entre otros.</li>
                  </ul>
              </div>
            </div>
          </div>
        </div>

        <div id="modal_tabla_clinicos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xs">
            <div class="modal-content">
              <img src="img/cover_images/clinicos.jpg" alt="" class="modal-img_header">
              <div class="modal-body texto_descripcion" id="pre_postnatal_body">
                <div class="panel panel-default">
                  <div class="panel-heading">
                      <h5 class="panel-title text-center">Indicaciones para estudios clínicos</h5>
                  </div>   
                  <ul class="list-group">
                      <li class="list-group-item">
                          <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1">
                              <div class="col-xs-10">
                                  Química clinica
                              </div>
                              <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                          </div>
                          <div id="detail-1">
                              <hr></hr>
                              <div class="container">
                                  <div class="fluid-row">
                                      <div class="col-xs-1">
                                          Estudio(s):
                                      </div>
                                      <div class="col-xs-5 text-justify">
                                          Glucosa, Urea, Creatinina, Ácido úrico
                                          <br>
                                          <ul>
                                            <li><strong>Indicaciones:</strong> Presentarse en el laboratorio con un ayuno mínimo de 6 horas</li>
                                            <li><strong>Muestra:</strong> Sangre periférica</li>
                                          </ul>
                                      </div>
                                      <br>
                                      <br>
                                      <div class="col-xs-1">
                                          Estudio(s):
                                      </div>
                                      <div class="col-xs-5 text-justify">
                                          Colesterol, Trigliceridos, Perfíl de lípidos
                                          <br>
                                          <ul>
                                            <li><strong>Indicaciones:</strong> Presentarse en el laboratorio para una toma de muestra sanguínea con un ayuno mínimo de 10 horas</li>
                                            <li><strong>Muestra:</strong> Sangre periférica</li>
                                          </ul>
                                      </div>
                                      <br>
                                      <br>
                                      <div class="col-xs-1">
                                          Estudio(s):
                                      </div>
                                      <div class="col-xs-5 text-justify">
                                          Pruebas de funcionamiento hepático, Amilasa, Lipasa, Albumina, Proteinas totales, Globulina, Electrolítos séricos (Na, K, Ca, Cl, Mg, P) , Fosfatasa alcalina
                                          <br>
                                          <ul>
                                            <li><strong>Indicaciones:</strong> Presentarse al laboratorio con un ayuno mínimo de 6 horas</li>
                                            <li><strong>Muestra:</strong> Sangre periférica</li>
                                          </ul>
                                      </div>
                                      <br>
                                      <br>
                                      <div class="col-xs-1">
                                          Estudio(s):
                                      </div>
                                      <div class="col-xs-5 text-justify">
                                          Tamiz de glucosa, Curva de tolerancia a la grlucosa
                                          <br>
                                          <ul>
                                            <li><strong>Indicaciones:</strong> Comunicarse al laboratorio para indicaciones, disponibilidad de tiempo para permanecer en el laboratorio.</li>
                                            <li><strong>Muestra:</strong> Sangre periférica</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="row toggle" id="dropdown-detail-2" data-toggle="detail-2">
                              <div class="col-xs-10">
                                  Urianálisis
                              </div>
                              <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                          </div>
                          <div id="detail-2">
                              <hr></hr>
                              <div class="container">
                                  <div class="fluid-row">
                                      <div class="col-xs-1">
                                          Estudio(s):
                                      </div>
                                      <div class="col-xs-5 text-justify">
                                          Examen general de orina, Microalbuminuria, Antidoping
                                          <br>
                                          <ul>
                                            <li><strong>Indicaciones:</strong> Recolectar una muestra de orina (Deseablemente la primera de la mañana o que permanecer 4 horas sin haber orinado) en un frasco limpio de boca ancha, habiendo realizado aseo genital con agua y jabón, se descarta el primer chorro de la orina en el escusado, sin detener la micción recolectar el chorro medio en el frasco y descartar el chorro final en el escusado. Mujeres: Deseablemente no estar menstruando. Niños: Se puede usar una bolsa recolectora de orina y colocar la bolsa cerrada en un frasco para evitar derrames. No se requiere ayuno.</li>
                                            <li><strong>Muestra:</strong> Orina</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="list-group-item">
                          <div class="row toggle" id="dropdown-detail-3" data-toggle="detail-3">
                              <div class="col-xs-10">
                                  Parasitología
                              </div>
                              <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                          </div>
                          <div id="detail-3">
                              <hr></hr>
                              <div class="container">
                                  <div class="fluid-row">
                                      <div class="col-xs-1">
                                          Estudio(s):
                                      </div>
                                      <div class="col-xs-5 text-justify">
                                          Examen coprológico, Ameba en fresco, Sangre oculta en heces, Azúcares reductores
                                          <ul>
                                            <li><strong>Indicaciones:</strong> Muestra de materia fecal del tamaño de una nuez en un frasco de boca ancha, que no tegan más de una hora de haber sido recolectada. En el caso de bebés se puede colocar el pañal al revés para evitar que el algodón absorba la muestra y pasar a un frasco de boca ancha. Evitar contaminación con orina.</li>
                                            <li><strong>Muestra:</strong> Materia fecal</li>
                                          </ul>
                                      </div>
                                      <br>
                                      <br>
                                      <div class="col-xs-1">
                                          Estudio(s):
                                      </div>
                                      <div class="col-xs-5 text-justify">
                                          Coproparasitoscópico
                                          <ul>
                                            <li><strong>Indicaciones:</strong> Muestra de materia fecal del tamaño de una nuez en un frasco de boca ancha. Si el estudio es en serie (2 o 3 muestras) se deben recolectar de días diferentes. No se requiere ayuno. En el caso de bebés se les puede colocar el pañal al revés para evitar que el algodón absorba la muestra y colocar en un frasco de boca ancha. Evitar contaminación con orina.</li>
                                            <li><strong>Muestra:</strong> Material fecal</li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="modal-fish" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xs">
              <div class="modal-content">
                <img src="img/cover_images/FISH.jpg" alt="" class="modal-img_header">
                <div class="modal-body texto_descripcion" id="pre_postnatal_body" style="position: relative; z-index: 10; margin-top: 1;">
                  <br>
                    <p>
                        La técnica de Hibridación In Situ Fluorescente (FISH) se ha convertido en una
                        herramienta de gran utilidad, capaz de detectar rearreglos en genes relacionados a
                        enfermedades genéticas hereditarias y de novo así como marcadores asociados a
                        cáncer o leucemias que son de alto valor diagnóstico y pronóstico para el paciente.
                        Esta técnica es muy sensible y específica ya que permite analizar un mayor número de
                        células incrementando la probabilidad de encontrar anormalidades cromosómicas, lo
                        cual se realiza en metafases así como en núcleos, lo que representa una gran ventaja
                        en los casos clínicos en donde no fue posible obtener un cariotipo o se obtuvo un
                        índice de metafases muy bajo.
                    </p>
                    <p>
                        Esta técnica utiliza una sonda (secuencia de DNA marcada con un fluoróforo) que
                        hibrida las secuencias únicas simples, es un complemento de la citogenética clásica. 
                    </p>
                    <strong>Algunos de los síndromes que se presentan a causa de deleciones submicroscópicas y
                        para los cuales Mendel ofrece estudios FISH son:</strong>
                    <ul>
                        <li>Síndrome de Charge</li>
                        <li>Síndrome de Cri-du-chat</li>
                        <li>Síndrome de DiGeorge</li>
                        <li>Síndrome de Prader Willi / Angelman</li>
                        <li>Síndrome de Saethre-Chotzen</li>
                        <li>Síndrome de Williams</li>
                        <li>Síndrome de Turner</li>
                        <li>Diferenciación sexual: gen SRY, pintado de los cromosomas sexuales.</li>
                    </ul>
                    <strong>En el área de oncología encontramos distintas neoplasias que presentan rearreglos
                        genéticos para las cuales Mendel ofrece estudios FISH son:</strong>
                    <ul>
                        <li>Mieloma múltiple (deleción 13q,p53, rearreglos en IGH)</li>
                        <li>Leucemia mieloide crónica (BCR/ABL1)</i>
                        <li>Leucemia mieloide aguda (PML/RARα, AML1/ETO, p53, rearreglos MLL)</i>
                        <li>Leucemia linfocítica crónica (deleción 13q, trisomía 12, ATM, deleción MYB)</li>
                        <li>Leucemia linfoblástica aguda (TEL/AML1, P53, rearreglos MLL, deleción MYB)</li>
                        <li>Sindrome mielodisplásico (deleción 7q y 5q)</li>
                        <li>Linfomas (rearreglos C-MYC)</li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div id="modal-biologia_molecular" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xs">
                <div class="modal-content">
                  <img src="img/portfolio/thumbnails/2.jpg" alt="" class="modal-img_header">
                  <div class="modal-body texto_descripcion" id="pre_postnatal_body">
                    <br>
                      <p>
                          A partir del año 2012 en Mendel se ha impulsado el desarrollo del área de BIOLOGÍA MOLECULAR, con la misión de realizar búsquedas de mutaciones a nivel del DNA que se asocian a enfermedades como las leucemias. Actualmente ofrecemos la detección de los marcadores neoplásicos más importantes de acuerdo a lo publicado por la Organización Mundial de la Salud (OMS) en 2017 y nuestro compromiso va más allá de ofertar estos estudios, ya que todos ellos están acreditados bajo la norma NMX-15189-2015 (ISO-15189-2012) y evaluados por la Entidad Mexicana de Acreditación, lo que garantiza un servicio confiable.
                      </p>
                      <p>
                          El área principal de diagnóstico molecular se enfoca en los cánceres de la sangre (leucemias/neoplasias hematológicas), por ello ofrecemos paneles de diagnóstico para la Leucemia linfoblástica aguda, que es la más frecuente en niños y para Leucemia mieloide aguda, la cual es frecuente en adultos. 
                      </p>
                      <p>
                          También se diagnostican otras neoplasias como policitemia vera, mielofibrosis primaria, trombocitemia esencial, leucemia granulocítica crónica, entre otras. Detectar de manera oportuna estos padecimientos y de los marcadores moleculares asociados a ellao, contribuye a tener el mejor tratamiento y el mejor seguimiento de la enfermedad, lo que mejora el pronóstico de los pacientes y su calidad de vida. 
                      </p>
                      <p>
                          Ofrecemos servicios de pruebas de paternidad lo cual es un estudio confiable que permite identificar la relación padre- hijo. Además, se ofertan las pruebas de maternidad, abuelidad y parentesco (relación avuncular), servicio que da tranquilidad y bienestar a las familias. La determinación de estas pruebas es a través de la secuenciación de regiones de DNA que se heredan de padres a hijos de manera directa, estas regiones se conocen como STR´s (short tandem repeats) y realizando la comparación de los perfiles de los individuos analizados se determina la relación familiar. Estos estudios se realizan en sangre periférica y/o en células bucales obtenidas por un raspado con hisopos. Es muy importante informar que la toma de muestra la debe realizar personal calificado para garantizar la integridad de las mismas. 
                        </p>
                        <p>
                          El área de BIOLOGÍA MOLECULAR ofrece la detección de enfermedades infecciosas a través de la detección de virus, tales como el VPH (virus del papiloma humana, VIH (virus de inmunodeficiencia humana), VHB (virus de hepatitis B), entre otros. También ofertamos un panel de enfermedades venéreas por métodos moleculares.

                          De esta manera, damos continuidad a nuestra filosofía, transformar el cuidado de la salud de nuestros pacientes y brindar bienestar a las familias.
                        </p>
                  </div>
                </div>
              </div>
            </div>

          <div id="modal-citometria_fllujo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-xs">
                <div class="modal-content">
                  <img src="img/portfolio/thumbnails/3.jpg" alt="" class="modal-img_header">
                  <div class="modal-body texto_descripcion" id="pre_postnatal_body">
                    <br>
                      <p>
                          <strong>Citometría de Flujo</strong> es un método utilizado en laboratorios de alta especialidad
                          que se basa en el uso de luz laser que incide sobre células transportadas por un
                          flujo continuo y ordenado de líquido envolvente; con el objeto de conocer las
                          características distintivas de una población celular; es decir, nos ayuda a conocer
                          la cantidad, tamaño, complejidad y presencia de biomarcadores.
                      </p>
                      <p>
                          <strong>Estudios que se realizan en Mendel y su relevancia clínica:</strong>
                          <ul>
                              <li>
                                  a) <strong>INMUNOFENOTIPO:</strong> 
                                  Sirve para el diagnóstico y clasificación de Leucemias</li>
                              <li>
                                  b) <strong>ENFERMEDAD MÍNIMA RESIDUAL:</strong> 
                                  Sirve para detectar células malignas
                              en pacientes que se encuentran en tratamiento de leucemia. Con el
                              objetivo de tener un pronóstico y establecer una estrategia ajustada a
                              riesgo, es decir, intensificar el tratamiento en pacientes con respuesta
                              inadecuada a la quimioterapia o disminuir la intensidad del tratamiento en
                              pacientes de bajo riesgo.</li>
                              <li>
                                  c) <strong>ÍNDICE DE DNA:</strong> 
                                  Usado como factor pronóstico en ciertos tipos de
                              Leucemias. En donde un buen pronóstico = favorable para el paciente y mal pronóstico
                              = desfavorable para el paciente.</li>
                              <li>
                                  d) <strong>SUBPOBLACIÓN DE LINFOCITOS CD4/CD8:</strong>
                              Control y seguimiento de pacientes infectados con el virus de
                              Inmunodeficiencia humana (VIH) o pacientes con enfermedades
                              Autoinmunitarias.</li>
                          </ul>

                      </p>
                      <p>
                          El tiempo de proceso de estos estudios es de 4 días hábiles y el tipo de
                          muestra que se requiere es Médula ósea (Extraída por médico hematólogo)
                          y sólo para la SUBPOBLACIÓN DE LINFOCITOS CD4/CD8 se requiere
                          sangre periférica. 
                      </p>
                  </div>
                </div>
              </div>
            </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="lib/jquery-easing/jquery.easing.min.js"></script>
    <script src="lib/scrollreveal/scrollreveal.js"></script>
    <script src="lib/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.js"></script>
    <script src="js/index.js"></script>
</body>
</html>