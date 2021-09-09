<html>
	<head>
	<?php
		require_once("includes/styles.php");
		require_once("includes/scripts2.php");
	?>
	</head>
<body>
	

	<nav class="navbar navbar-default" role="navigation">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" style="background-color:black;" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand menu-button logo-brand"  data-section="0"  href="index.php" ><img  alt="Toks" src="assets/img/logo-instituto.jpg" class="logo-brand-img" ></a>
	  </div>

	  <div class="collapse navbar-collapse navbar-ex1-collapse">
	   	<ul class="nav navbar-nav" role="menu" >
	   	<li id="boton_inicio" class="menu-black  menu-button"  data-section="0" ><a  href="index.php" >INICIO</a></li>
	      <li id="botonlic" class="menu-black  menu-button" data-section="1" ><a  href="#" >PREPARATORIA</a></li>

	      <li class="menu-orange2 menu-button " data-section="2"><a  href="#" >PLAN DE ESTUDIOS</a></li>

	      <li class="menu-brown menu-button" data-section="3" ><a href="#" >CALENDARIO</a></li>
	    </ul>
	  </div>
	</nav>


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
	        <p style="color: black"  >El Numero de empleado que ingresó ya se encuentra registrado.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"  >Aceptar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


<div class="container-fluid" id="noscroll"  >


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
	
		<div class="section_noscroll" section="1"  type="noscroll" id="section_1"  >
				<div class="content-complete-noscroll vertical-center" >
					<div class="row">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
						<div class="col-md-8 col-md-offset-2 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: #F07E30;" ><h4 class="submarco-noscroll"  style="border-color: white; background-color: #F07E30;" ><strong>PREPARATORIA</strong></h4></div></div>
											<div class="subtitulo" ><h4></h4></div>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="font-size: 13px;text-align: justify;
    text-justify: inter-word;" >
												En el Bachillerato, se adquieren competencias específicas y

												profesionales que te permiten desarrollarte de manera exitosa en el

												mundo laboral, puesto que cuentas con mayores recursos técnicos,

												intelectuales y humanos. Así mismo, el bachillerato te abrirá las puertas

												al mundo universitario en donde podrás especializarte en el área de tu

												interés.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												&nbsp;
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="font-size: 13px; text-align: justify;
    text-justify: inter-word;" >
													Prepa Toks, es un programa de Bachillerato Virtual con Reconocimiento

													de Validez Oficial de Estudios por la Secretaría de Educación Pública,

													que te permitirá en tus propios tiempos, cursarla bajo un modelo muy

													accesible, diseñado para adultos que trabajan, a través de cualquier

													dispositivo con acceso a internet como; computadoras, tabletas,

													celulares, entre otros.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												&nbsp;
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2"  style="font-size: 13px; text-align: justify;
    text-justify: inter-word;">
													Te invitamos a que conozcas el Plan de Estudios, Calendario Escolar y

													Sistema de Evaluación de Prepa Toks y recuerda que estaremos

													acompañándote en todo tu proceso formativo porque eres parte

													importante de nuestra familia.
											</p>

											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												&nbsp;
											</p>
						</div>
					</div>
				</div>

		</div>


			<div class="section_noscroll" section="2"  type="noscroll" id="section_2" style="display:none;"  >
				<div class="content-complete-noscroll vertical-center" >
					<div class="row">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
						<div class="col-md-10 col-md-offset-1 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: #F07E30;" ><h4 class="submarco-noscroll"  style="border-color: white; background-color: #F07E30;"  ><strong>PLAN DE ESTUDIOS</strong></h4></div></div>
											<div class="subtitulo" ><h4></h4></div>

											<!--<div class="subtitulo_orange col-md-12" ><h4><strong>PLAN DE ESTUDIOS</strong></h4></div>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >

											</p>-->
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="font-size: 14px; text-align: justify" >
													Un Plan de Estudios es un sistema ordenado de materias, a través del cual cursas un grado

											académico. El Plan de Estudios del Instituto Toks es el esquema que muestra el camino que seguirás

											para cursar este grado académico que es tu bachillerato.
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
															<td>*Matemáticas I</td>
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

			<div class="section_noscroll" section="3"  type="noscroll" id="section_3"  style="display:none;"  >
				<div class="content-complete-noscroll vertical-center" >
					<div class="row">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
						<div class="col-md-10 col-md-offset-1 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: #F07E30;" ><h4 class="submarco-noscroll"   style="border-color: white; background-color: #F07E30;"  ><strong>CALENDARIO</strong></h4></div></div>
											<div id="calendar" class="col-md-10 col-md-offset-1"  >
											</div>

											
						</div>
					</div>
				</div>
		</div>

		<section class="section" type="scroll" section="10" id="section_10"  >
				<div class="col-xs-12 col-md-12 footer-top" >
						<div class="row text-center">
								<div class="form-group col-md-12 col-xs-12">
									<div class="" ><h3>TEL. 01 800 890 7949</h3></div>
								</div>
								<!--<div class="form-group col-md-6 col-xs-12">
									<h3>(01 800 000 00 0000)</h3>
								</div>-->
								<div class="form-group col-md-5 col-xs-12">
									<small class="p_texto_small_grey">AGCollege es una marca registrada de GrupoAG, todos los derechos reservados.</small>
								</div>
								<div class="form-group col-md-2 col-xs-12" >
									<small class="p_texto_small_grey"><a class="p_texto_small_grey" href="#" >Aviso de privacidad</a></small>
								</div>
								<div class="form-group col-md-5 col-xs-12">
									<small class="p_texto_small_grey">InstitutoToks es una marca registrada de Toks, todos los derechos reservados.</small>
								</div>
						</div>
				</div>
				<div class="col-md-12 col-xs-12 footer-bottom" >
						<div class="row vertical-center">
							<!--<a href="#" class="thumbnail">
						      <img src="assets/img/toks_logo.png" alt="toks_logo">
						    </a>-->
						    <div class="col-md-12 text-center">
						    	<img alt="" src="assets/img/toks_logo.png" class="imagen-footer" style="height:45px;" >
						    	<img alt="" src="assets/img/logos-06.png" class="imagen-footer" >
						    	<img alt="" src="assets/img/logos-04.png" style="width: 50px;" class="imagen-footer" >
								<img alt="" src="assets/img/beer.png"   width="12%">
								<img alt="" src="assets/img/shakeshack.png" width="13%" style="margin-left:10px;"  >
							</div>

						
						</div>
				</div>

		</section>

</div>

</body>
</html>