<?PHP 
$url="http://".$_SERVER['HTTP_HOST'].":".$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];

if($url=="http://www.itoks.mx:80/" or $url=="http://itoks.mx:80/")
{
	header('Location: http://www.institutotoks.mx/web');   //<- Buena esa calamardo //Buena esa calamardo x2 w/h s2
	}
?>
<html>
	<head>
	<?php
		require_once("includes/styles.php");
		require_once("includes/scripts.php");
	?>
	
	

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-172952505-19"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
	    function gtag(){dataLayer.push(arguments);}
	      gtag('js', new Date());
	      
	        gtag('config', 'UA-172952505-19');
	        </script>


	<style>
		/* ********** */
		    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.5;
    }

    /* The Modal (background) */
    .modal-noticia {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 2000;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-contenido {
        margin: auto;
        display: block;
        width: 100%;
        max-width: 62vw;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-contenido,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .cerrar {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .cerrar:hover,
    .cerrar:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-contenido {
            margin: auto;
			display: block;
			width: 100%;
			max-width: 100vw;
        }
    }
		/* ********** */
	</style>
	        
	</head>
<body>
	

	<nav class="navbar navbar-default" role="navigation">
	
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" style="background-color:black;" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar" style=" color:orange;" ></span>
	      <span class="icon-bar" style=" color:orange;" ></span>
	      <span class="icon-bar" style=" color:orange;" ></span>
	    </button>
	    <a class="navbar-brand menu-button logo-brand"  data-section="1"  href="index.php#section_1"><img  alt="Toks" src="assets/img/logo-instituto.jpg?r=2019-06-12" class="logo-brand-img" ></a>
	  </div>

	  <div class="collapse navbar-collapse navbar-ex1-collapse" style="z-index: 9999999;" >
	   	<ul class="nav navbar-nav" role="menu" >
	      <li class="menu-black  menu-button"  ><a data-section="2" href="#bienvenido" class="menu-button" >QUIÉNES SOMOS</a></li>
	      <!--<li class="menu-orange dropdown-submenu" tabindex="-1" ><a href="#">ESTUDIOS OFICIALES</a>
	      	<ul class="dropdown-menu">
	            <li class="menu-orange menu-button" data-section="3" ><a tabindex="-1" href="#">PREPARATORIA</a></li>
	            <li class="menu-orange menu-button" data-section="4" ><a tabindex="-1" href="#">LICENCIATURA</a></li>
        	</ul>
          </li> -->
			<div class="dropdown" style="height: 3em; margin-bottom: 1px;" >
				  <li data-section="6" class="dropdown-toggle menu-orange menu-button text-center toggle_subtutton" id="dropdownMenu1" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="true">
				    ESTUDIOS OFICIALES
				  </li> 
				  <ul class="dropdown-menu text-center hidden-xs" style="z-index:999099; height: 100%; margin-left:130px; margin-top:-33%; box-shadow: no; background-color: transparent;  padding:0 !important;" aria-labelledby="dropdownMenu1">
				    <li class="menu-orange menu-button text-center subbutton  " data-section="3"><a  href="preparatoria.php"><br>PREPARATORIA</a></li>
				    <li class="menu-orange menu-button text-center subbutton"   data-section="4"><a href="licenciatura.php"><br>LICENCIATURA</a></li>
				  </ul>
			</div>
	    <li class="menu-orange3 menu-button hidden-lg hidden-sm hidden-md" data-section="3"><a  href="preparatoria.php">PREPARATORIA</a></li>
	    <li class="menu-orange3 menu-button hidden-lg hidden-sm hidden-md"  data-section="4"><a href="licenciatura.php">LICENCIATURA</a></li>
	      <li class="menu-orange2 menu-button" data-section="5"><a href="#">EDUCACIÓN EJECUTIVA</a></li>
	      <li class="menu-orange3 menu-button" data-section="66" data-toggle="modal" data-target="#biblioteca" ><a href="#">BIBLIOTECA VIRTUAL</a></li>
	     <!-- <li class="menu-orange3 menu-button" data-section="66" data-toggle="modal" data-target="#videoteca" ><a href="#">VIDEOTECA VIRTUAL</a></li>-->

	      <li class="menu-orange4" ><a data-section="7" href="#section_7" class="menu-button" >INSCRÍBETE</a></li>
	      <li class="menu-brown menu-button" ><a href="#section_8" class="menu-button" data-section="8" >CONTACTO</a></li>
	    </ul>
	  </div>
	</nav>



	<!-- SCROLLL SECTIONS -->
	<!-- PAGINA 1 -->
	<div class="container-fluid"  id="scroll" >
		<section class="section" type="scroll" section="1"  id="section_1" >
		

	<div  class="hidden-xs" style="right:0px; top:0px; width:100%; position:fixed; z-index:999;"  >
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="background-color: black; width:250px;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px; "  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
		</div>
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="margin-right:10px; width:250px; background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
		</div>
	</div>

	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:50px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
	</div>
	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:100px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
	</div>


				<div class="content-top" >
				</div>

				<div class="banner-bottom col-md-12" >

						<div id="page1_banner1" >
							<div class="row"> 
							<!--<strong class="text-center">
						        <span class="visible-xs">xs</span>
						        <span class="visible-sm">sm</span>
						        <span class="visible-md">md</span>
						        <span class="visible-lg">lg</span>
						    </strong> -->
								<div class="col-md-6 col-md-offset-3"  >
									<div class="subtitulo" style="font-style:bold;" ><strong>BIENVENIDOS</strong></div>
									<div class="subtitulo" style="font-size: 29px;"  >-AL INSTITUTO TOKS-</div>
								</div>
							</div>
							<div class="visible-lg  visible-md  row text-center" style="position:relative; bottom: 0px;" >
								<div class="col-md-2 col-xs-2"  >
									<img alt="" src="assets/img/toks_logo.png"  style="width: 130px; height: 120px;"   >
								</div>
								<div class="col-md-2 col-xs-2"   >
									<img alt="" src="assets/img/logos-06.png"  style="width: 130px; height: 130px;"  >
								</div>
								<div class="col-md-2 col-xs-2"  >
									<img alt="" src="assets/img/logos-04.png"  style="width: 130px; height: 130px;" >
								</div>
								<div class="col-md-2 col-xs-2"  style="margin-top:20px;margin:right:20px;">
									<img alt="" src="assets/img/beer.png"  width="120%" style=""  >
								</div>
								
								<div class="col-md-4 col-xs-4" style="margin-top:12px;" >
									<img alt="" src="assets/img/shakeshack.png"  width="73%" style="" >
								</div>
								
							</div>

							<div class="visible-sm row text-center" style="position:relative; bottom: 0px;" >
								<div class="col-md-2 col-xs-2"  >
									<img alt="" src="assets/img/toks_logo.png"  style="width: 130px; height: 120px;"   >
								</div>
								<div class="col-md-2 col-xs-2"   >
									<img alt="" src="assets/img/logos-06.png"  style="width: 130px; height: 130px;"  >
								</div>
								<div class="col-md-2 col-xs-2"  >
									<img alt="" src="assets/img/logos-04.png"  style="width: 130px; height: 130px;" >
								</div>
								<div class="col-md-2 col-xs-2"  style="margin-top:20px;margin:right:20px;">
									<img alt="" src="assets/img/beer.png"  width="120%" style=""  >
								</div>
								
								<div class="col-md-4 col-xs-4" style="margin-top:12px;" >
									<img alt="" src="assets/img/shakeshack.png"  width="73%" style="" >
								</div>
							</div>

							<div class="visible-xs row text-center" style="position:relative; bottom: 0px;" >
								<div class="col-md-2 col-xs-2"  >
									<img alt="" src="assets/img/toks_logo.png"  style="width: 130px; height: 120px;"   >
								</div>
								<div class="col-md-2 col-xs-2"   >
									<img alt="" src="assets/img/logos-06.png"  style="width: 130px; height: 130px;"  >
								</div>
								<div class="col-md-2 col-xs-2"  >
									<img alt="" src="assets/img/logos-04.png"  style="width: 130px; height: 130px;" >
								</div>
								<div class="col-md-2 col-xs-2"  style="margin-top:20px;margin:right:20px;">
									<img alt="" src="assets/img/beer.png"  width="120%" style=""  >
								</div>
								
								<div class="col-md-4 col-xs-4" style="margin-top:12px;" >
									<img alt="" src="assets/img/shakeshack.png"  width="73%" style="" >
								</div>
							</div>

						</div>
						<div id="page1_banner2" style="display:none;" >
							<div class="row">
								<div class="col-md-6 col-md-offset-3 "  >
									<div class="text-center hidden-xs" style="margin-top:40px; margin-bottom:35px;" >
											<strong  class="subtitulo hidden-xs"   >INSTITUTO TOKS</strong>

											<p class="p_texto_small" >
											<br>
											En el Instituto Toks estamos comprometidos con tu desarrollo educativo, con el

											bienestar de tu familia y el crecimiento de nuestra empresa, es por ello que hoy

											ponemos a tu disposición el camino más seguro para tu éxito presente y futuro, tu

											preparación continua, a través de estudios oficiales y diferentes cursos orientados a tu

											especialización. Felicidades por ser parte del Instituto Toks.
											</p>
									</div>

									<div class="text-center hidden-lg hidden-sm hidden-md" style="margin-top:10px; margin-bottom:0px;" >
											<strong  class="subtitulo hidden-lg hidden-sm hidden-md" style="font-size:18px;"  >INSTITUTO TOKS</strong>

											<p class="p_texto_small" >
											<br>
											En el Instituto Toks estamos comprometidos con tu desarrollo educativo, con el

											bienestar de tu familia y el crecimiento de nuestra empresa, es por ello que hoy

											ponemos a tu disposición el camino más seguro para tu éxito presente y futuro, tu

											preparación continua, a través de estudios oficiales y diferentes cursos orientados a tu

											especialización. Felicidades por ser parte del Instituto Toks.
											</p>

									</div>

								</div>
							</div>
						</div>
					</div>
		</section>

		<!-- PAGINA 2 -->
		<section class="section" type="scroll" section="2" id="section_2" >
				<div class="content-complete2" >
						<p>&nbsp;</p>
						<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 borde-marco" id="bienvenido" style=" padding:0 20; ">
											
											<div class="subtitulo titulo-marco" ><h4><strong>INSTITUTO TOKS</strong></h4></div>
											<!--<div class="subtitulo" ><h4>QUIÉNES SOMOS</h4></div>-->
											<p class="p_texto_small" style="text-align: justify;" >
												El Instituto Toks nace en el año 2008, con

												el objetivo de proveer de herramientas

												técnicas y administrativas a los

												colaboradores del Grupo Toks, procurando

												fomentar su crecimiento como personas al

												formarlos como profesionistas.
											</p>

											<p class="p_texto_small" style=" text-align: justify;" >
												Nuestros colaboradores son de suma

												importancia; por ello, hemos decidido dar

												un gran paso en su formación académica,

												donde a través del Instituto Toks, contarán

												con estudios oficiales de Bachillerato y

												Licenciatura en Línea con Reconocimiento

												de Validez Oficial por la Secretaría de

												Educación Pública. Adicionalmente, el

												Instituto Toks pondrá a su disposición

												cursos y diplomados de temas diversos

												que contribuirán a su crecimiento y

												desarrollo profesional y personal.
											</p>
											<p class="p_texto_small" style=" text-align: justify;" >
												Es un privilegio contar con tu participación

													en este extraordinario Programa

													Académico cuyo propósito es impactar de

													manera directa en tu bienestar y el de tu

													familia; disfruta y aprovecha esta gran

													oportunidad de iniciar y concluir tus

													estudios.
											</p>
											<p class="p_texto_small" style="text-align:left;"  >
												Felicidades y Bienvenido al Instituto Toks.
												<br>
												<p  class="p_texto_small"><strong>Olivia Maciel Amaya</strong><br>Gerente de Desarrollo Organizacional e Instituto Toks</p>
												
											</p>
											<div class="subtitulo_orange" ><h3>MISIÓN INSTITUTO TOKS</h3></div>

											<p class="p_texto_small"  style=" text-align: justify;">
													Contribuir en el desarrollo de los

													colaboradores TOKS formando personas,

													comprometidas, con alto nivel de

													profesionalización y sentido humano para

													brindar a nuestros clientes la mejor

													experiencia en alimentos y servicio.
											</p>

											<div class="subtitulo_orange" ><h3>VISIÓN INSTITUTO TOKS </h3></div>

											<p class="p_texto_small"  style=" text-align: justify;">
												Desarrollar el mejor talento a través de

												nuestro modelo educativo, para ser

												reconocido por su preparación, eficiencia e

												innovación.
											</p>

											<div class="subtitulo_orange" ><h3>PRINCIPIOS INSTITUTO TOKS</h3></div>

											<p class="col-md-7 col-md-offset-3 p_texto_small"  style="text-align: justify;">
												1. Calidad en el Modelo Educativo<br>
												2. Compromiso con la Formación Integral<br>
												3. Integración a la Diversidad<br>
												4. Innovación y Aprendizaje<br>
												5. Participación Activa
											</p>
						</div>
				</div>
		</section>


		<!-- PAGINA 3 -->
		<section class="section" type="scroll" section="7" id="section_7"  >
				<div class="content-complete7" >
					<div class="row">		
						<div id="carousel" style="position:absolute; background-image: url(assets/img/foto1-01.png); background-repeat: no-repeat; background-size: 100% 100%; height: 100%; width: 100%; "  ></div>								
						<div class="visible-lg visible-md col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 borde-marco2 vertical-center" style="height:100%;" >
							<div id="btn_inscripcion_preparatoria" class="col-md-8 col-md-offset-2 submarco btn_inscripcion_preparatoria" style="margin-top:-50px;"  data-toggle="modal" data-target="#myModal" >
								<div class="text-center subtitulo" style="opacity: 0.9 !important;" >INSCRÍBETE<br> A PREPARATORIA</div>
							</div>
							<div  id="btn_inscripcion_licenciatura" class="col-md-8 col-md-offset-2 submarco btn_inscripcion_licenciatura" data-toggle="modal"  style="margin-top:50px;"  data-target="#myModal" >
								<div class="text-center subtitulo" style="opacity: 0.9 !important;" >INSCRÍBETE<br> A LICENCIATURA</div>
							</div>
						</div>



						<div class="visible-xs visible-sm col-sm-10 col-sm-offset-1 col-xs-12 borde-marco2 vertical-center" style="height:100%; margin-top:0px;" >
							<div id="btn_inscripcion_preparatoria2" class="col-md-8 col-md-offset-2 submarco btn_inscripcion_preparatoria" style="margin-top:-50px;"  data-toggle="modal" data-target="#myModal" >
								<div class="text-center subtitulo" style="opacity: 0.9 !important;" >INSCRÍBETE<br> A PREPARATORIA</div>
							</div>
							<div  id="btn_inscripcion_licenciatura2" class="col-md-8 col-md-offset-2 submarco btn_inscripcion_licenciatura" data-toggle="modal"  style="margin-top:50px;"  data-target="#myModal" >
								<div class="text-center subtitulo" style="opacity: 0.9 !important;" >INSCRÍBETE<br> A LICENCIATURA</div>
							</div>
						</div>



					</div>
				</div>
		</section>
		<!-- PAGINA 8 -->
		<section class="section"  type="scroll" section="8" id="section_8"  >
				<div class="content-complete8" >
					<div class="row">										
						<p>&nbsp;</p>
						<p>&nbsp;</p>
						<div class="col-md-6 col-md-offset-3 vertical-center" >

							<form class="form" id="form_contacto" name="form_cantacto" >
								<div class="form-group col-md-12 col-xs-12">
									<div class="titulo_contacto" ><h2>CONTACTO</h2></div>
									<small class="p_texto_small">Tu opinión es muy importante para nosotros. Si tienes algún comentario o sugerencia, ponte en contacto con nosotros.</small>
								</div>
								<div class="form-group col-md-12 col-xs-12">
									<input class="form-control input-toks" type="text" placeholder="NOMBRE" name="nombre" id="nombre" >
								</div>
								<div class="form-group col-md-6 col-xs-12">
									<input class="form-control input-toks" type="text" placeholder="CORREO ELECTRÓNICO" name="correo" id="correo" >
								</div>
								<div class="form-group col-md-6 col-xs-12">
									<input class="form-control input-toks" type="number" placeholder="TELÉFONO" name="telefono" id="telefono" >
								</div>
								<div class="form-group col-md-12 col-xs-12">
									<textarea class="form-control input-toks" placeholder="MENSAJE" name="mensaje" id="mensaje" rows="6" ></textarea>  
								</div>
								<div class="form-group col-md-12 col-xs-12">
									<input class="form-control submit-toks" type="submit" value="ENVIAR"  name="ENVIAR" id="ENVIAR" >
								</div>
								<input class="form-control submit-toks" type="hidden" value=""  name="ip" id="ip" >
								<input class="form-control submit-toks" type="hidden" value=""  name="browser" id="browser" >

								<!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 " style="text-align:right; font-size:20px;"  >
										<div class="pull-right  col-xs-12" >ATENCIÓN TELEFÓNICA</div>
										<div class="pull-right  col-xs-12" style="margin-top:0px;">(667) 000 00 00</div>
								</div>-->
								<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12  text-center " style="  font-size:20px;"  >
									<div class="" >
										<h4>HORARIO DE ATENCIÓN: </h4></div>
									<div class="" >
										<h4>Lunes a Viernes <br>9:00 - 14:00hrs	y 16:00 - 20:00hrs <br>(Hora Centro) </h4></div>
									<div class="" >
										<h4>Sábados <br> 10:00 - 14:00hrs <br>(Hora Centro)</h4>
									</div>
									
								</div>
								<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12  text-center " style="  font-size:20px;"  >
									<!-- <div class="pull-left  col-xs-12" ><h4>TELÉFONOS</h4></div>
									<div class="pull-left  col-xs-12" style="margin-top:0px; font-size: 25px;">
									01 (6677) 15 00 50 
									<br>01 (6677) 15 00 05
									</div>-->
								</div>
								<div class="col-lg-12  col-md-12 col-sm-12 col-xs-12  text-center " style="  font-size:20px;"  >
									<div class="pull-left  col-xs-12" ><h4>CORREO</h4></div>
									<div class="pull-left  col-xs-12" style="margin-top:0px; font-size: 25px;"><h4>institutotoks@agcollege.edu.mx</h4></div>
									<div class=" col-xs-12"style="height: 10px" ></div>
								</div>
								

								<br>
							</form>
						</div>
					</div>
				</div>
		</section>

				<!-- PAGINA 9 -->
		<section class="section" type="scroll" section="9" id="section_9"  >
				<div class="col-xs-12 col-md-12 footer-top" >
					<div class="row text-center">
						<div class="form-group col-md-12 col-xs-12">
							<div class="" ><h5>LADA SIN COSTO:<br>
 01 800 890 9159, 01 800 890 7949 y 01 800 890 8925 </h5></div>
							
							
						</div>
						<!--<div class="form-group col-md-6 col-xs-12">
							<h3>(01 800 000 00 0000)</h3>
						</div>-->
						<div class="form-group col-md-5 col-xs-12">
							<small class="p_texto_small_grey">AG College es una marca registrada de Grupo AG, todos los derechos reservados.</small>
						</div>
						<div class="form-group col-md-2 col-xs-12" >
							<small class="p_texto_small_grey"><a class="p_texto_small_grey" href="#" >Aviso de privacidad</a></small>
						</div>
						<div class="form-group col-md-5 col-xs-12">
							<small class="p_texto_small_grey">InstitutoToks es una marca registrada de Toks, todos los derechos reservados.</small>
						</div>
					</div>
				</div>
		</section>
				<!-- PAGINA 10 -->
		<section class="section" type="scroll" section="10" id="section_10"  >

				<div class="col-md-12 col-xs-12 footer-bottom" >
						<div class="row vertical-center">
							<!--<a href="#" class="thumbnail">
						      <img src="assets/img/toks_logo.png" alt="toks_logo">
						    </a>-->
						    <div class="col-md-12 text-center">
						    	<img alt="" src="assets/img/toks_logo.png" class="imagen-footer" style="height:45px;" >
						    	<img alt="" src="assets/img/logos-06.png" class="imagen-footer" >
						    	<img alt="" src="assets/img/logos-04.png" style="width: 50px;" class="imagen-footer" >
								<img alt="" src="assets/img/beer.png"   width="8%">
								<img alt="" src="assets/img/shakeshack.png" width="9%" style="margin-left:10px;"  >
								<!--<img alt="" src="assets/img/logos-06.png" class="imagen-footer" >-->
							</div>

							<!--
						    <a class="text-center col-md-1 col-xs-2 col-md-offset-3  "  >
								<img alt="" src="assets/img/toks_logo.png" class="imagen-footer" >
							</a>
							<a class="text-center col-md-1 col-xs-2 "  >
								<img alt="" src="assets/img/logos-02.png" class="imagen-footer" >
							</a>
							<a class="text-center col-md-1 col-xs-2 "  >
								<img alt="" src="assets/img/logos-03.png" class="imagen-footer" >
							</a>
							<a class="text-center col-md-1 col-xs-2 "   >
								<img alt="" src="assets/img/logos-04.png" class="imagen-footer" >
							</a>
							<a class="text-center col-md-1 col-xs-2 "  >
								<img alt="" src="assets/img/logos-05.png" class="imagen-footer"  >
							</a>
							<a class="text-center col-md-1 col-xs-2 "  >
								<img alt="" src="assets/img/logos-06.png" class="imagen-footer" >
							</a>
							-->

							<!--<div class="col-md-1 col-xs-2 col-md-offset-3 "  >
								<img alt="" src="assets/img/toks_logo.png" class="imagen-footer" >
							</div>
							<div class="col-md-1 col-xs-2"  >
								<img alt="" src="assets/img/logos-02.png" class="imagen-footer" >
							</div>
							<div class="col-md-1 col-xs-2"  >
								<img alt="" src="assets/img/logos-03.png" class="imagen-footer" >
							</div>
							<div class="col-md-1 col-xs-2"   >
								<img alt="" src="assets/img/logos-04.png" class="imagen-footer" >
							</div>
							<div class="col-md-1 col-xs-2"  >
								<img alt="" src="assets/img/logos-05.png" class="imagen-footer"  >
							</div>
							<div class="col-md-1 col-xs-2"  >
								<img alt="" src="assets/img/logos-06.png" class="imagen-footer" >
							</div>-->
						</div>
				</div>

		</section>
	</div>

<!-- =============================================================-->
	<!-- =============================================================-->
	<!-- =============================================================-->

	<!--MODALES -->
	<div class="modal fade" id="MessageContactoSuccess" tabindex="2" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title p_texto" style="color: black"  >Mensaje Enviado</h4>
	      </div>
	      <div class="modal-body">
	        <p class="p_texto" style="color: black"  >Su mensaje ha sido enviado correctamente. Gracias por contactar con nosotros.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="modal fade" id="MessageContactoError" tabindex="3" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title p_texto" style="color: black" >Aviso</h4>
	      </div>
	      <div class="modal-body p_texto">
	        <p style="color: black"  >No se ha podido enviar el mensaje en este momento. intentelo mas tarde.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->



	<div class="modal fade" id="MessageSolicitudEnviado" tabindex="4" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title p_texto" style="color: black"  >Pre-Registro Enviado</h4>
	      </div>
	      <div class="modal-body">
	        <p class="p_texto" style="color: black"  >Su Pre-Registro ha sido enviado correctamente. Gracias.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<div class="modal fade" id="MessageInscripcionError" tabindex="5" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title p_texto" style="color: black" >Lo sentimos</h4>
	      </div>
	      <div class="modal-body p_texto">
	        <p style="color: black"  >No se ha podido enviar el Pre-registro en este momento. intentelo mas tarde.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"  >Aceptar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<div class="modal fade" id="MessageSolicitudExistente" tabindex="6" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title p_texto" style="color: black" >Aviso</h4>
	      </div>
	      <div class="modal-body p_texto">
	        <p style="color: black"  >El Numero de Estafeta que ingresó ya se encuentra registrado.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"  >Aceptar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->






<!--MODAL BIBLIOTECA-->

<div class="modal fade p_texto" id="biblioteca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
 			<div class="modal-header" style="background-color: #F4EEDD; border-color: #F4EEDD; ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div style="background-color: #F4EEDD; color:black;" class="modal-body" >
            	<div class="row">
            			<div class="col-md-8 col-md-offset-2 text-center "  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><h2><strong>Biblioteca Virtual del Instituto Toks</strong></h2></div>
											<p class="p_texto_small" style="text-align:justify;"  >
											Nos complace poner a tu disposición la Biblioteca Virtual Pearson, la más completa de América Latina y una de las más reconocidas a nivel global.
											</p>

											<p class="p_texto_small" style="text-align:justify;" >
												Pearson es la empresa más importante del mundo en materiales educativos para
												niveles oficiales de educación; desde prescolar, hasta bachillerato y educación superior, así como formación ejecutiva.
											</p>
											<!--<p class="p_texto_small" style="text-align:justify;" >
												Por ello, es para nosotros un privilegio haber formalizado este convenio entre Pearson e Instituto Toks, ya que en esta herramienta de aprendizaje multimedia, encontrarás el 100% de los contenidos académicos de tus materias de preparatoria.
											</p>-->

											<p class="p_texto_small" style="text-align:justify;" >
												Por ello, te recomendamos que al finalizar el estudio de cada asignatura, complementes tus conocimientos, mediante la lectura de este material electrónico.
											</p>
											<p class="p_texto_small" style="text-align:justify;"  >
												Su uso te permitirá:
												<ul class="p_texto_small" style="text-align:justify;" >
												<li >Consolidar lo aprendido en cada uno de los bloques de las materias que

												curses.</li>

												<li>Adquirir y perfeccionar tus procesos de aprendizaje.</li>

												<li>Interactuar en un espacio vivo y dinámico para el trabajo académico, la

												búsqueda de información, el diálogo y el intercambio.</li>

												<li>Generar una cultura para la reflexión, el análisis y la crítica.</li>

												<li>Crear un sentido de autodeterminación, autodirección y autoestudio.</li>
												</ul>
											</p>
											<p class="p_texto_small" style="text-align:justify;" >
												En nombre de Instituto Toks y Pearson, te invitamos a que utilices esta

												herramienta académica, no sólo con el propósito de buscar información, sino como

												un espacio de interacción educativa, donde cultives tu espíritu y construyas

												nuevos conocimientos para tu desarrollo y el de tu familia.
											</p>
											<p class="p_texto_small" style="text-align:justify;"  >
												* Para ingresar a la Biblioteca Virtual, da clic en el botón de abajo y al ingresar

											escribe como usuario: bibliotecavirtualAGC@agcollege.edu.mx y contraseña: agcollege
											</p>

											<p class="p_texto_small"   >
											<br>
												<div class="subtitulo " ><div class="col-md-8 col-md-offset-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color:white;"  href="https://www.biblionline.pearson.com/" target="blank_">BIBLIOTECA VIRTUAL</a></strong></h5></div></div>
											</p>

						</div>
            	</div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade p_texto" id="videoteca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #F4EEDD; border-color: #F4EEDD; ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div style="background-color: #F4EEDD; color:black;" class="modal-body" >
            	<div class="row">
            			<div class="col-md-8 col-md-offset-2 text-center "  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><h2><strong>Videoteca Virtual del Instituto Toks</strong></h2></div>
											<p class="p_texto_small" style="text-align:justify;"  >
											Una de las más poderosas herramientas del aprendizaje en línea, es el uso de

											videos como complemento del contenido académico; en ese sentido el Instituto

											Toks pone a tu disposición el 100% del material audiovisual producido por la

											Secretaría de Educación Pública para cada una de tus asignaturas del

											bachillerato; a través de los cuales podrás vivir la experiencia de un docente a

											distancia en tus propios tiempos y con la frecuencia que sea necesaria para la

											total comprensión del contenido educativo.
											</p>

											<p class="p_texto_small" style="text-align:justify;" >
												En nombre de Instituto Toks y la Secretaría de Educación Pública, te invitamos a

												profundizar en cada uno de los temas y reforzar tus conocimientos con este

												material audiovisual; mismo que te permitirá:
											</p>

											<p class="p_texto_small" style="text-align:justify;"  >
												
												<ul class="p_texto_small" style="text-align:justify;" >
												<li >Reforzar lo aprendido en cada uno de los bloques de las materias que

curses.</li>
												<li>Adquirir y perfeccionar tus procesos de aprendizaje.</li>
												<li>Generar una cultura para la reflexión, el análisis y la crítica, con la revisión
bibliográfica previa y el enfoque educativo del docente.</li>
												<li>Crear un sentido de autodeterminación, autodirección y autoestudio.</li>
												<li>Consultar el video cuantas veces consideres necesario para la
consolidación de tu aprendizaje.</li>
												<li>Resolver problemas del tema de tu elección con una explicación paso a
paso.</li>
												</ul>
											</p>
											<p class="p_texto_small" style="text-align:justify;" >
												Te invitamos a visitar este espacio que te ayudará a crecer como autogestor de tu

aprendizaje, en un ambiente visual y auditivo.
											</p>
											<p class="p_texto_small" style="text-align:justify;"  >

											</p>

											<p class="p_texto_small"   >
											<br>
												<div class="subtitulo " ><div class="col-md-8 col-md-offset-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color:white;"  href="videoteca.php" >VIDEOTECA VIRTUAL</a></strong></h5></div></div>
											</p>

						</div>
            	</div>
            </div>
        </div>
    </div>
</div>

<!--        PREINSCRIPCION       -->

	<!-- Modal Pre-Inscripción -->
<div class="modal fade p_texto" id="inscripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel_inscripcion">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #F07E30; border-color: #F07E30; ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title" id="myModalLabel_inscripcion" style="color:white; font-color:white;"> Ficha de Pre-Inscripción 2</h4></center>
            </div>
            <div style="background-color:black;" class="modal-body" >
                <!--Formulario-->
                <div id="errors" class="display-errors text-center"></div>
                <form action="" id="inscripcion_form">
                    <hr style="background-color: white; border-color: white; " />
                    <!-- renglon 1 -->
                    <section id="seccion1" >
                        <h4 align="center" class="titulo-marco" >Información del Establecimiento</h4>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <input type="hidden" value="0" id="inscripcion_tipo" name="inscripcion_tipo" >
                                        <label for="apellido_paterno"><i class="fa fa-slack"></i>Estafeta</label>
                                        <input type="text" class="form-control input-toks" id="inscripcion_numEmpleado" name="inscripcion_numEmpleado" placeholder="# de empleado" >
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group" id="combobox_estados">
                                        <label for="inscripcion_estado"><i class="fa fa-globe"></i> Estado de la Unidad</label>
                                        <select id="inscripcion_estado" name="inscripcion_estado" class="form-control input-toks" >
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group" id="combobox_estados">
                                        <label for="inscripcion_ciudad"><i class="fa fa-globe"></i> Ciudad de la Unidad</label>
                                        <select id="inscripcion_ciudad" name="inscripcion_ciudad" class="form-control input-toks" >
                                        </select>
                                    </div>
                                </div> 
	                                <div class="col-md-4 col-lg-4">
	                                    <div class="form-group" id="combobox_tienda">
	                                        <label for="inscripcion_tienda"><i class="fa fa-building"></i> Número de Unidad</label>
	                                        <!--<select id="inscripcion_tienda" name="inscripcion_numTienda" class="form-control input-toks" >
	                                        </select>-->
	                                        <input type="text" class="form-control input-toks" id="inscripcion_numTienda" name="inscripcion_numTienda" placeholder="Número de unidad">

	                                    </div>
                               		</div>
									 <div class="col-md-4 col-lg-4">
	                                    <div class="form-group">
	                                        <label for="inscripcion_nombreunidad"><i class="fa fa-user"></i> Nombre de Unidad</label>
	                                        <input type="text" class="form-control input-toks" id="inscripcion_nombreunidad" name="inscripcion_nombreunidad" placeholder="Nombre de unidad">
	                                    </div>
	                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                
                            </div>
                        </div>
                    </section>
                    <hr style="background-color: white; border-color: white; " />
                    <section id="seccion2">
                        <h4 align="center" class="titulo-marco" >Información Personal</h4>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_apellidoP"><i class="fa fa-user"></i> Apellido paterno</label>
                                        <input type="text" class="form-control input-toks" id="inscripcion_apellidoP" name="inscripcion_apellidoP" placeholder="Ingrese su apellido paterno...">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_apellidoM"><i class="fa fa-user"></i> Apellido materno </label>
                                        <input type="text" class="form-control input-toks" id="inscripcion_apellidoM" name="inscripcion_apellidoM" placeholder="Ingrese su apellido materno...">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_nombres"><i class="fa fa-user"></i> Nombre(s) </label>
                                        <input type="text" class="form-control input-toks" id="inscripcion_nombres" name="inscripcion_nombres" placeholder="Ingrese su nombre(s)...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_sexo"><i class="fa fa-venus-mars"></i> Sexo</label>
                                        <select class="form-control input-toks" name="inscripcion_sexo">
                                            <option value="">Seleccione una opción...</option>
                                            <option name="Femenino" value="1">Femenino</option>
                                            <option name="Masculino" value="2">Masculino</option>
                                        </select>
                                    </div>
                                </div>
                                <!--
                                                                <div class="col-md-4 col-lg-4">
                                                                    <div class="form-group">
                                                                        <label for="inscripcion_edad">Edad</label>
                                                                        <select class="form-control input-toks" name="inscripcion_edad">
                                                                            <option value="">Seleccione una opción...</option>
                                                                            <option name="edad15" value="15">15</option>
                                                                        <option name="edad16" value="16">16</option>
                                                                        <option name="edad17" value="17">17</option>
                                                                        <option name="edad18" value="18">18</option>
                                                                        <option name="edad19" value="19">19</option>
                                                                        <option name="edad20" value="20">20</option>
                                                                        <option name="edad21" value="21">21</option>
                                                                        <option name="edad22" value="22">22</option>
                                                                        <option name="edad23" value="23">23</option>
                                                                        <option name="edad24" value="24">24</option>
                                                                        <option name="edad25" value="25">25</option>
                                                                        <option name="edad26" value="26">26</option>
                                                                        <option name="edad27" value="27">27</option>
                                                                        <option name="edad28" value="28">28</option>
                                                                        <option name="edad29" value="29">29</option>
                                                                        <option name="edad30" value="30">30</option>
                                                                        <option name="edad31" value="31">31</option>
                                                                        <option name="edad32" value="32">32</option>
                                                                        <option name="edad33" value="33">33</option>
                                                                        <option name="edad34" value="34">34</option>
                                                                        <option name="edad35" value="35">35</option>
                                                                        <option name="edad36" value="36">36</option>
                                                                        <option name="edad37" value="37">37</option>
                                                                        <option name="edad38" value="38">38</option>
                                                                        <option name="edad39" value="39">39</option>
                                                                        <option name="edad40" value="40">40</option>
                                                                        <option name="edad41" value="41">41</option>
                                                                        <option name="edad42" value="42">42</option>
                                                                        <option name="edad43" value="43">43</option>
                                                                        <option name="edad44" value="44">44</option>
                                                                        <option name="edad45" value="45">45</option>
                                                                        <option name="edad46" value="46">46</option>
                                                                        <option name="edad47" value="47">47</option>
                                                                        <option name="edad48" value="48">48</option>
                                                                        <option name="edad49" value="49">49</option>
                                                                        <option name="edad50" value="50">50</option>
                                                                        <option name="edad51" value="51">51</option>
                                                                        <option name="edad52" value="52">52</option>
                                                                        <option name="edad53" value="53">53</option>
                                                                        <option name="edad54" value="54">54</option>
                                                                        <option name="edad55" value="55">55</option>
                                                                        <option name="edad56" value="56">56</option>
                                                                        <option name="edad57" value="57">57</option>
                                                                        <option name="edad58" value="58">58</option>
                                                                        <option name="edad59" value="59">59</option>
                                                                        <option name="edad60" value="60">60</option>
                                                                        <option name="edad61" value="61">61</option>
                                                                        <option name="edad62" value="62">62</option>
                                                                        <option name="edad63" value="63">63</option>
                                                                        <option name="edad64" value="64">64</option>
                                                                        <option name="edad65" value="65">65</option>
                                                                        <option name="edad66" value="66">66</option>
                                                                        <option name="edad67" value="67">67</option>
                                                                        <option name="edad68" value="68">68</option>
                                                                        <option name="edad69" value="69">69</option>
                                                                        <option name="edad70" value="70">70</option>
                                                                        <option name="edad71" value="71">71</option>
                                                                        <option name="edad72" value="72">72</option>
                                                                        <option name="edad73" value="73">73</option>
                                                                        <option name="edad74" value="74">74</option>
                                                                        <option name="edad75" value="75">75</option>
                                                                        <option name="edad76" value="76">76</option>
                                                                        <option name="edad77" value="77">77</option>
                                                                        <option name="edad78" value="78">78</option>
                                                                        <option name="edad79" value="79">79</option>
                                                                        <option name="edad80" value="80">80</option>
                                                                        <option name="edad81" value="81">81</option>
                                                                        <option name="edad82" value="82">82</option>
                                                                        <option name="edad83" value="83">83</option>
                                                                        <option name="edad84" value="84">84</option>
                                                                        <option name="edad85" value="85">85</option>
                                                                        <option name="edad86" value="86">86</option>
                                                                        <option name="edad87" value="87">87</option>
                                                                        <option name="edad88" value="88">88</option>
                                                                        <option name="edad89" value="89">89</option>
                                                                        <option name="edad90" value="90">90</option>
                                                                        <option name="edad91" value="91">91</option>
                                                                        <option name="edad92" value="92">92</option>
                                                                        <option name="edad93" value="93">93</option>
                                                                        <option name="edad94" value="94">94</option>
                                                                        <option name="edad95" value="95">95</option>
                                                                        <option name="edad96" value="96">96</option>
                                                                        <option name="edad97" value="97">97</option>
                                                                        <option name="edad98" value="98">98</option>
                                                                        <option name="edad99" value="99">99</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                 -->
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_estadoCivil"><i class="fa fa-circle-thin"></i> Estado civil</label>
                                        <select class="form-control input-toks" name="inscripcion_estadoCivil">
                                            <option value="">Seleccione una opción...</option>
                                            <option value="1">Soltero(a)</option>
                                            <option value="2">Casado(a)</option>
                                            <option value="3">Divorciado(a)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_fecha"><i class="fa fa-calendar"></i> Fecha de nacimiento</label>
                                        <input type="text" class="form-control input-toks" name="inscripcion_fecha" placeholder="AAAA-MM-DD" id="campo_fecha" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                            </div>
                        </div>
                    </section>
                    <hr style="background-color: white; border-color: white; " />
                    <section id="seccion3">
                        <h4 align="center" class="titulo-marco" >Domicilio</h4>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class=" col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_calle"><i class="fa fa-home"></i> Calle</label>
                                        <input type="text" class="form-control input-toks" name="inscripcion_calle" placeholder="Ingrese su calle...">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_numeroCasa"><i class="fa fa-home"></i> Número</label>
                                        <input type="text" class="form-control input-toks" name="inscripcion_numeroCasa" placeholder="Ingrese el número de su casa...">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_colonia"><i class="fa fa-home"></i> Colonia</label>
                                        <input type="text" class="form-control input-toks" name="inscripcion_colonia" placeholder="Ingrese su colonia...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_codigoPostal"><i class="fa fa-home"></i> Código postal</label>
                                        <input type="text" class="form-control input-toks validar_codigoPostal" name="inscripcion_codigoPostal" placeholder="Ingrese un código postal">
                                        <small> ¿No recuerdas tu código postal? <a href="http://www.sepomex.gob.mx/lservicios/servicios/descarga.aspx" target="_blank">¡Averígualo aquí!</a></small>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_delegacion"><i class="fa fa-home"></i> Delegación</label>
                                        <input type="text" class="form-control input-toks" name="inscripcion_delegacion" placeholder="Ingrese una delegación...">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">

                                        <label for="inscripcion_estado_usuario"><i class="fa fa-globe"></i> Estado</label>
                                        <select id="inscripcion_estado_usuario" name="inscripcion_estado_usuario" class="form-control input-toks" placeholder="Seleccione un estado...">
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_ciudadConfirmacion"><i class="fa fa-globe"></i> Ciudad o Municipio</label>
                                        <select id="inscripcion_ciudad_usuario"  name="inscripcion_ciudad_usuario" class="form-control input-toks" placeholder="Selecciones una ciudad..." >
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr style="background-color: white; border-color: white; " />
                    <section id="seccion4">
                        <h4 align="center" class="titulo-marco">Información de Contacto</h4>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_telefonoCasa"><i class="fa fa-phone"></i> Teléfono casa</label>
                                        <input type="text" class="form-control input-toks validar_telefonoCasa" name="inscripcion_telefonoCasa" placeholder="Ingrese un teléfono de casa...">
                                        <small>¿No conoces tu lada? <a href="http://www.portaltelefonico.mx/claves-lada-de-mexico" target="_blank">¡Averígualo aquí!</a></small>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_telefonoAlterno"><i class="fa fa-phone"></i> Teléfono alterno</label>
                                        <input type="text" class="form-control input-toks " name="inscripcion_telefonoAlterno" placeholder="Ingrese un teléfono alterno...">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="inscripcion_telefonoCelular"><i class="fa fa-mobile"></i> Teléfono celular</label>
                                        <input type="text" class="form-control input-toks" name="inscripcion_telefonoCelular" placeholder="Ingrese su teléfono celular...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="inscripcion_correo"><i class="fa fa-envelope"></i> Correo electrónico</label>
                                        <input type="email" class="form-control input-toks" name="inscripcion_correo" placeholder="Ingrese su correo electrónico...">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="inscripcion_facebook"><i class="fa fa-facebook-official"></i> Facebook</label>
                                        <input type="text" class="form-control input-toks" name="inscripcion_facebook" placeholder="ingrese su facebook (optional)...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <hr style="background-color: white; border-color: white; " />
                    <section id="seccion5">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="inscripcion_curp"><i class="fa fa-key"></i> Curp</label>
                                        <input type="text" class="form-control input-toks " name="inscripcion_curp" placeholder="Ingrese su curp..."  onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        <small>Busca tu curp <a href="https://consultas.curp.gob.mx/CurpSP/" target="_blank"> Aquí</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group text-left">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"  class="input-toks" name="firma" value="1"> <p class="justify" style="padding-right: 20px;">Al seleccionar esta opción, confirmo que los datos escritos en este formulario son correctos y me comprometo
                                                    a entregar los documentos necesarios para continuar con mi proceso de pre-inscripción al programa de Instituto Toks.</p>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <button type="submit" name="submitButton" class="submit-toks pull-left">Enviar</button>
                                        <button type="button" name="cancelarButton" class="btn btn-default pull-right cancelarButton input-toks" data-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="noscroll" style="display: none;"  >
		<div class="section_noscroll" type="noscroll"  style="display:none;" >
		<div class="content-complete-noscroll vertical-center" >
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: black;" ><h4 class="submarco-noscroll"  ><strong>PREPARATORIA</strong></h4></div></div>
											<div class="subtitulo" ><h4></h4></div>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sem varius sodales. Maecenas egestas dignissim consequat. Aenean ac felis quis ipsum mattis venenatis ut eu purus. Proin porttitor velit elit, et finibus velit sagittis luctus.
											</p>

											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												Nam placerat tristique dui vitae blandit. Donec auctor nunc ipsum, finibus rutrum ex luctus ac. Proin eu lorem mauris. Nullam euismod tincidunt ornare. Cras scelerisque nisl sit amet ornare elementum. Integer euismod ultrices felis, quis commodo massa elementum a.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >&nbsp;
												
											</p>

											<div class="subtitulo_orange col-md-12" ><h4><strong>PLAN DE ESTUDIOS</strong></h4></div>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >

											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												Un Plan de Estudios es un sistema ordenado de materias, a través del cual cursas un grado académico. El Plan de Estudios de Instituto Toks es el esquema que muestra el camino que seguirás para cursar este grado académico que es tu Bachillerato.
											</p>

											<div class="col-md-12 table-responsive" >
												<table class="table-toks" >
													<thead>
														<tr>
															<th>Líneas / Cuatrimestres</th>
															<th>Primero</th>
															<th>Segundo</th>
															<th>Tercero</th>
															<th>Cuarto</th>
															<th>Quinto</th>
															<th>Sexto</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td rowspan="5"><div class="p_texto_orange" >Formación Básica</div></td>
															<td>*Matemáticas I I</td>
															<td>*Matemáticas II</td>
															<td>*Matemáticas III</td>
															<td>*Matemáticas IV</td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<!--<td > </td>-->
															<td> </td>
															<td>*Química</td>
															<td>*Biología</td>
															<td>*Física</td>
															<td>*Geografía</td>
															<td>*Ecología y Medio Ambiente</td>
														</tr>
														<tr>
															<!--<td > </td>-->
															<td>*Taller de Lectura y Redacción I </td>
															<td>*Introducción de las Ciencias Sociales</td>
															<td>*Historia de México</td>
															<td>*Estructura Socioeconómica de México</td>
															<td>*Historia Universal Contemporánea</td>
															<td>*Metodología de la Investigación</td>
														</tr>
														<tr>
															<!--<td > </td>-->
															<td>*Lengua Adicional al Español I</td>
															<td>*Lengua Adicional al Español II</td>
															<td>*Lengua Adicional al Español III</td>
															<td>*Lengua Adicional al Español IV</td>
															<td></td>
															<td>*Filosofía</td>
														</tr>
														<tr>
															<!--<td > </td>-->
															<td>*Informática I</td>
															<td>*Informática II</td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>

														<!-- FORMACION CORPORATIVA-->
														<tr>
															<td rowspan="2"><div class="p_texto_orange">Formación Corporativa</div></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td>Toks VI</td>
															<td>Toks IX</td>
														</tr>
														<tr>
															<!--<td > </td>-->
															<td>Toks I Contenido Corporativo Orientado a Ética y Valores</td>
															<td>Toks II Contenido Corporativo Orientado a Taller de Lectura y Redacción II</td>
															<td>Toks III Contenido Corporativo Orientado a Literatura</td>
															<td></td>
															<td>Toks VII</td>
															<td>Toks X</td>
														</tr>
														<!-- ESPECIALIZACION DEPARTAMENTAL -->
														<tr>
															<td><div class="p_texto_orange" >Especialización Departamental</div></td>
															<td></td>
															<td></td>
															<td>Toks IV</td>
															<td>Toks V</td>
															<td>Toks VIII</td>
															<td>Toks XI</td>
														</tr>

														<tr>
														<td colspan="7" class="text-center" > * Materias con contenido oficial adaptadas al contenido corporativo</td>
														</tr>
													</tbody>
												</table>
											</div>
											<br>
											<div class="subtitulo_orange col-md-12" ><h4><strong>REQUISITOS DE ADMISIÓN</strong></h4></div>
											<p class="p_texto col-md-4 col-md-offset-4">
												<br>
												Entrega de Documentación

											</p>
											<p class="p_texto col-md-4 col-md-offset-4" >
												Certificado de Secundaria Original
												<br>
												Acta de Nacimiento Original
												<br>
												Solicitud de Inscripción
											</p>
						</div>
					</div>
				</div>

				
		</div>
		<div class="section_noscroll"  type="noscroll"  style="display:none;" >
				<div class="content-complete-noscroll vertical-center" >
					<div class="row">
						<div class="col-md-10 col-md-offset-1 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: black;" ><h4 class="submarco-noscroll"  ><strong>LICENCIATURA DE DESARROLLO GERENCIAL</strong></h4><br><h6>con acentuación en Administración de Restaurantes. </h6></div></div>
											<div class="subtitulo" ><h4></h4></div>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel justo sit amet sem varius sodales. Maecenas egestas dignissim consequat. Aenean ac felis quis ipsum mattis venenatis ut eu purus. Proin porttitor velit elit, et finibus velit sagittis luctus.
											</p>

											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												Nam placerat tristique dui vitae blandit. Donec auctor nunc ipsum, finibus rutrum ex luctus ac. Proin eu lorem mauris. Nullam euismod tincidunt ornare. Cras scelerisque nisl sit amet ornare elementum. Integer euismod ultrices felis, quis commodo massa elementum a.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >&nbsp;
												
											</p>

											<div class="subtitulo_orange col-md-12" ><h4><strong>PLAN DE ESTUDIOS</strong></h4></div>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >

											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												Un Plan de Estudios es un sistema ordenado de materias, a través del cual cursas un grado académico. El Plan de Estudios de Instituto Toks es el esquema que muestra el camino que seguirás para cursar este grado académico que es tu Licenciatura.
											</p>

											<div class="col-md-12 table-responsive" >
												<table class="table-toks2" >
													<thead>
														<tr>
															<th>Fases de Formación</th>
															<th colspan="3">Básico</th>
															<th colspan="3">Intermedio</th>
															<th colspan="3">Avanzado</th>
														</tr>
														<tr>
															<th>Líneas / Cuatrimestres</th>
															<th>Primero</th>
															<th>Segundo</th>
															<th>Tercero</th>
															<th>Cuarto</th>
															<th>Quinto</th>
															<th>Sexto</th>
															<th>Séptimo</th>
															<th>Octavo</th>
															<th>Noveno</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td rowspan="2"><div class="p_texto_orange" >Formación Básica</div></td>
															<td>*Matemáticas para Administración I</td>
															<td>*Matemáticas para Administración II</td>
															<td>*Matemáticas para Administración III</td>
															<td rowspan="2" >Contabilidad</td>
															<td rowspan="2" >Estadistica Aplicada a la Administración</td>
															<td>Administración del Capital Humano</td>
															<td rowspan="2">Administración de Operaciones</td>
															<td rowspan="2">Mercadotecnia Estratégica </td>
															<td rowspan="2">Procesos y Calidad</td>
														</tr>
														<tr>
															<!--<td rowspan="2"><div class="p_texto_orange" >Formación Básica</div></td>-->
															<td>*Introducción a la Administración I</td>
															<td>*Macroeconomía</td>
															<td>Macroeconomía</td>
															<!--<td rowspan="2" >Contabilidad</td>-->
															<!--<td rowspan="2" >Estadistica Aplicada a la Administración</td>-->
															<td>Finanzas</td>
															<!--<td rowspan="2">Administración de Operaciones</td>
															<td rowspan="2">Mercadotecnia Estratégica </td>
															<td rowspan="2">Procesos y Calidad</td>-->
														</tr>
														<tr>
															<td><div class="p_texto_orange" >Gerencial</div></td>
															<td></td>
															<td></td>
															<td>Introducción a la Empresa</td>
															<td >Desarrollo de Habilidades Gerenciales</td>
															<td >Dirección y Liderazgo</td>
															<td>Pensamiento Estratégico</td>
															<td>Ejecución y Negociación </td>
															<td>Administración y Manejo del Desempeño</td>
															<td>Gerenciamiento de Centro</td>
														</tr>
														<tr>
															<td><div class="p_texto_orange" >Desarrollo Humano</div></td>
															<td>Pensamiento Lógico</td>
															<td>Ética Laboral</td>
															<td>Comunicación e Imagen</td>
															<td ></td>
															<td ></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td><div class="p_texto_orange" >Inglés</div></td>
															<td></td>
															<td></td>
															<td></td>
															<td ></td>
															<td ></td>
															<td>Inglés para Negocios I</td>
															<td>Inglés para Negocios II</td>
															<td></td>
															<td></td>
														</tr>

														<tr>
															<td><div class="p_texto_orange" >Desarrollo Organizacional</div></td>
															<td>Cultura Organzacional</td>
															<td>Psicología Organizacional</td>
															<td>Aprendizaje	Organizacional</td>
															<td ></td>
															<td >Organización y Desarrollo</td>
															<td></td>
															<td>Manejo de Personal y Trabajo en Equipo</td>
															<td>Comunicación Organizacional</td>
															<td>Marco Jurídico</td>
														</tr>
														<tr>
															<td><div class="p_texto_orange" >Tecnológica</div></td>
															<td>Tecnologías de la Información I</td>
															<td>Tecnologías de la Información II</td>
															<td></td>
															<td ></td>
															<td ></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td colspan="4"><div class="p_texto_orange" >Acentuación en Administración de Restaurantes</div></td>
															<td >Servicios de Alimentos y Bebidas</td>
															<td >Procesos y Preparación de Alimentos</td>
															<td>Estrategias de Compras y Abastecimiento</td>
															<td>Tendencias de Gastronomía</td>
															<td>Certificaciones de Calidad para Restaurantes</td>
															<td>Análisis de Costos de Alimentos y Bebidas</td>
														</tr>
													</tbody>
												</table>
											</div>
											<br>
											<div class="subtitulo_orange col-md-12" ><h4><strong>REQUISITOS DE ADMISIÓN</strong></h4></div>
											<p class="p_texto col-md-4 col-md-offset-4">
												<br>
												Entrega de Documentación

											</p>
											<p class="p_texto col-md-6 col-md-offset-3" >
												Certificado de Preparatoria Original
												<br>
												Acta de Nacimiento Original
												<br>
												Solicitud de Inscripción
											</p>
						</div>
					</div>
				</div>

				

		</div>
		<div class="section_noscroll" section="5" type="noscroll" id="section_5" style="display:none;" >
				<div class="content-complete-noscroll vertical-center" >

	<div  class="hidden-xs" style="right:0px; top:0px; width:100%; position:fixed; z-index:999;"  >
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="background-color: black; width:250px;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px; "  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
		</div>
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="margin-right:10px; width:250px; background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
		</div>
	</div>

	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:50px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
	</div>
	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:100px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
	</div>


					<div class="row">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
						<div class="col-md-8 col-md-offset-2 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong>EDUCACIÓN EJECUTIVA</strong></h5></div></div>
											<div class="subtitulo" ><h4></h4></div>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;" >
											Con el propósito de mejorar e incrementar de forma permanente tus competencias, el

											Instituto Toks te presenta formalmente el área de Educación Ejecutiva que pondrá a

											disposición tuya una serie de Programas Académicos Curriculares que apoyarán tu

											desarrollo dentro de Toks; a través de cursos, diplomados y talleres lograrás

											especializarte en diversas áreas del conocimiento, lo que sin duda, impulsará tu plan

											de vida y carrera con nosotros.
											</p>

											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;" >
												Los programas académicos de Educación Ejecutiva tienen el propósito de desarrollar

												en ti competencias específicas que te permitan mejorar no sólo tu desempeño, sino tu

												rol como colaborador de nuestra empresa, así mismo, podrás acceder a una

												Certificación, Diploma o Reconocimiento de Validez Curricular.
											</p>

											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;"  >
												Cada uno de los programas de Educación Ejecutiva está dirigido de forma particular a

												las diferentes responsabilidades organizacionales dentro de Toks, puesto que nuestro

												objetivo es ser una organización completamente integrada y coordinada en todas las

												áreas de la empresa.
											</p>
											
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;" >
												Estamos seguros que en el Instituto Toks, siempre encontrarás un valioso medio de

												aprendizaje que te permita mejorar tu vida y la de tu familia.
											</p>
											
											<br>
											
						</div>
					</div>
				</div>

				
		</div>

		<div class="section_noscroll" section="6" type="noscroll" id="section_6" style="display:none;" >
				<div class="content-complete-noscroll vertical-center" >
							

	<div  class="hidden-xs" style="right:0px; top:0px; width:100%; position:fixed; z-index:999;"  >
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="background-color: black; width:250px;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px; "  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
		</div>
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="margin-right:10px; width:250px; background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
		</div>
	</div>

	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:50px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
	</div>
	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:100px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
	</div>


					<div class="row">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
						<div class="col-md-8 col-md-offset-2 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong>ESTUDIOS OFICIALES</strong></h5></div></div>
											<div class="subtitulo" ><h4></h4></div>


											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;"  >
											En el Instituto Toks, sabemos que tienes un futuro extraordinario como

											colaborador de esta gran empresa y deseamos que desarrolles una larga y

											productiva carrera con nosotros; para ello, es muy importante que cada día

											estés más preparado, que adquieras competencias que te permitan

											desarrollarte de forma exitosa en todos los ámbitos de tu vida y el único

											camino que te permitirá lograrlo es la educación.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2"  style="text-align:justify;"  >
												En el Instituto Toks, tu educación es nuestra prioridad y por eso,

												continuamente estaremos desarrollando diversos y muy innovadores

												Programas Académicos Oficiales que te permitan obtener no sólo el grado

												de Bachillerato y Licenciatura, sino también programas de Posgrado.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;"  >
												De inicio, el Instituto Toks pone a tu disposición Prepa Toks, un programa

												académico de bachillerato diseñado en forma exclusiva para ti como

												colaborador de Toks, en donde podrás estudiar en tus propios tiempos desde

												cualquier lugar, a cualquier hora para lograr a través de AG College, obtener

												tu Certificado de Bachillerato con Reconocimiento de Validez Oficial de

												Estudios por la Secretaría de Educación Pública.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;"   >
												Al mismo tiempo, el Instituto Toks te invita a que curses la Licenciatura en

												Desarrollo Gerencial con acentuación en Administración de

												Restaurantes que te permitirá no sólo adquirir competencias para la

												operación de negocios como liderazgo, calidad, análisis de la información,

												toma de decisiones, trabajo en equipo, finanzas, economía, mercadotecnia,

												entre otros campos del conocimiento, sino que también esta licenciatura

												está orientada a que te especialices en el campo restaurantero y con ello,

												tengas amplias posibilidades de crecer dentro de nuestra organización.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;"  >
												Nos sentimos muy orgullosos de brindarte esta gran oportunidad de iniciar o

												continuar tus estudios con un Modelo Educativo único en México que

												seguramente impactará de forma muy positiva a tu familia, a tu persona y tu

												desarrollo profesional dentro de Toks.
											</p>
											<br>


											
						</div>
					</div>
				</div>

				
		</div>
</div>

</body>
</html>
											</p>
											
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;" >
												Estamos seguros que en el Instituto Toks, siempre encontrarás un valioso medio de

												aprendizaje que te permita mejorar tu vida y la de tu familia.
											</p>
											
											<br>
											
						</div>
					</div>
				</div>

				
		</div>

		<div class="section_noscroll" section="6" type="noscroll" id="section_6" style="display:none;" >
				<div class="content-complete-noscroll vertical-center" >
							

	<div  class="hidden-xs" style="right:0px; top:0px; width:100%; position:fixed; z-index:999;"  >
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="background-color: black; width:250px;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px; "  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
		</div>
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="margin-right:10px; width:250px; background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
		</div>
	</div>

	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:50px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
	</div>
	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:100px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
	</div>


					<div class="row">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
						<div class="col-md-8 col-md-offset-2 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong>ESTUDIOS OFICIALES</strong></h5></div></div>
											<div class="subtitulo" ><h4></h4></div>


											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;"  >
											En el Instituto Toks, sabemos que tienes un futuro extraordinario como

											colaborador de esta gran empresa y deseamos que desarrolles una larga y

											productiva carrera con nosotros; para ello, es muy importante que cada día

											estés más preparado, que adquieras competencias que te permitan

											desarrollarte de forma exitosa en todos los ámbitos de tu vida y el único

											camino que te permitirá lograrlo es la educación.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2"  style="text-align:justify;"  >
												En el Instituto Toks, tu educación es nuestra prioridad y por eso,

												continuamente estaremos desarrollando diversos y muy innovadores

												Programas Académicos Oficiales que te permitan obtener no sólo el grado

												de Bachillerato y Licenciatura, sino también programas de Posgrado.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;"  >
												De inicio, el Instituto Toks pone a tu disposición Prepa Toks, un programa

												académico de bachillerato diseñado en forma exclusiva para ti como

												colaborador de Toks, en donde podrás estudiar en tus propios tiempos desde

												cualquier lugar, a cualquier hora para lograr a través de AG College, obtener

												tu Certificado de Bachillerato con Reconocimiento de Validez Oficial de

												Estudios por la Secretaría de Educación Pública.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;"   >
												Al mismo tiempo, el Instituto Toks te invita a que curses la Licenciatura en

												Desarrollo Gerencial con acentuación en Administración de

												Restaurantes que te permitirá no sólo adquirir competencias para la

												operación de negocios como liderazgo, calidad, análisis de la información,

												toma de decisiones, trabajo en equipo, finanzas, economía, mercadotecnia,

												entre otros campos del conocimiento, sino que también esta licenciatura

												está orientada a que te especialices en el campo restaurantero y con ello,

												tengas amplias posibilidades de crecer dentro de nuestra organización.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="text-align:justify;"  >
												Nos sentimos muy orgullosos de brindarte esta gran oportunidad de iniciar o

												continuar tus estudios con un Modelo Educativo único en México que

												seguramente impactará de forma muy positiva a tu familia, a tu persona y tu

												desarrollo profesional dentro de Toks.
											</p>
											<br>


											
						</div>
					</div>
				</div>
	</div>
</div>
<!-- 
<div id="modal-inscripcion" class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">        
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<section id="inicio" >
					<div class="container">
						<div class="row">
							<div class="col-lg-12 text-left custom">
								
								<img src="assets/img/Flyer_web_2.jpg" alt="" width="100%">
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="modal-footer">
				<a type="button" class="btn btn-primary" target="_blank" href="assets/img/Flyer_web_2.jpg">Descargar</a>        
				<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
			</div>
		</div>
	</div>
	
</div> -->

<div id="modal_flyer" style="overflow: auto;"class="modal modal-noticia">
    <span class="close cerrar" style="margin-top: 80px;position: aboslute;" data-dismiss="modal" aria-label="Close" id="cerrarNoticia" onclick="cerrarNoticia()">&times;</span>
        <img class="modal-content modal-contenido" id="img01">
   

    <div id="caption"></div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<script type="text/javascript">
 var modal = document.getElementById("modal_flyer");
    var span = document.getElementById("cerrarNoticia");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src = "assets/img/FLYER_TOKS_2.jpg";
    captionText.innerHTML = `
        
        <a id="cerrarNoticia" class="btn btn-primary" href="assets/img/Flyer_web_2.jpg" target="_blank">Descargar</a>
        <a id="cerrarNoticia" class="btn btn-primary" onclick="cerrarNoticia()">Cerrar</a>
	`;

    function cerrarNoticia(){
        modal.style.display = "none";
    }

$(function(){
	$('#modal-inscripcion').modal('show');
});

	
</script>
</body>
</html>
