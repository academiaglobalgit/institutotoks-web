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
	      <li id="botonlic" class="menu-black  menu-button" data-section="1" ><a  href="#" >LICENCIATURA</a></li>

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
	        <p style="color: black"  >El Numero de empleado que ingres?? ya se encuentra registrado.</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal"  >Aceptar</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


<div class="container-fluid" id="noscroll"  >



	<div  class="hidden-xs" style="right:0px; top:0px; width:100%; position:fixed; z-index:999;"  >
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="background-color: black; width:250px;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px; "  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesi??n </a></strong></h5></div>
		</div>
		<div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="margin-right:10px; width:250px; background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesi??n </a></strong></h5></div>
		</div>
	</div>

	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:50px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesi??n </a></strong></h5></div>
	</div>
	<div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:100px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesi??n </a></strong></h5></div>
	</div>
		
		<div class="section_noscroll" section="1"  type="noscroll" id="section_1"  >
				<div class="content-complete-noscroll vertical-center" style=" background-color: #e6e6e6;">

					<div class="row">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
						<div class="col-md-8 col-md-offset-2 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px; " >
											<div class="subtitulo titulo-marco" ><div class="col-md-6 col-md-offset-3" style="background-color: black;" ><h5 class="submarco-noscroll"  >LICENCIATURA DE DESARROLLO GERENCIAL <br><br> <small style="color: white;" >con Acentuaci??n en Administraci??n de Restaurantes.</small> </h5></div></div>
											<div class="subtitulo" ><h4></h4></div>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="font-size: 13px; text-align: justify;
    text-justify: inter-word;" >
												El Instituto Toks trae para ti, un grado acad??mico de nivel superior

												con la Licenciatura en Desarrollo Gerencial con acentuaci??n en

												Administraci??n de Restaurantes, la cual est?? dise??ada para que

												adquieras en cada una de sus etapas de formaci??n, competencias de

												gerenciamiento, administraci??n, operaci??n de negocios, lo que

												necesariamente incluye habilidades de organizaci??n, control, medici??n,

												servicio y calidad; pero al mismo tiempo, esta licenciatura pone especial

												??nfasis en las personas, en el trato al colaborador, la forma de orientarlo

												e instruirlo mediante t??cnicas de liderazgo, as?? como la conformaci??n de

												equipos colaborativos, hasta lograr una conciencia colectiva de

												corresponsabilidad en el trabajo y por lo tanto en los resultados.
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												&nbsp;
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" style="font-size: 13px; text-align: justify;
    text-justify: inter-word;" >
												La Licenciatura Toks, te permitir?? crecer de manera m??s s??lida en nuestra

												organizaci??n, ya que con su acentuaci??n en Administraci??n de

												Restaurantes conocer??s actividades esenciales de la din??mica

												restaurantera.
											</p>
												<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												&nbsp;
											</p>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2"  style="font-size: 13px; text-align: justify;
    text-justify: inter-word;">
														Te invitamos a formar parte del grupo de colaboradores que cursar??n la

													Licenciatura en Desarrollo Gerencial con Acentuaci??n en Administraci??n

													de Restaurantes.
											</p>

											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
												&nbsp;
											</p>
						</div>
					</div>
				</div>

		</div>


			<div class="section_noscroll" section="2"  type="noscroll" id="section_2" style="display:none;"  >
				<div class="content-complete-noscroll vertical-center" style=" background-color: #e6e6e6;" >
					
					<div class="row">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
						<div class="col-md-10 col-md-offset-1 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: black;" ><h4 class="submarco-noscroll"  ><strong>PLAN DE ESTUDIOS</strong></h4></div></div>
											<div class="subtitulo" ><h4></h4></div>

											<!--<div class="subtitulo_orange col-md-12" ><h4><strong>PLAN DE ESTUDIOS</strong></h4></div>
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
											</p>-->
											
											<p class="p_texto_small text-center col-md-8 col-md-offset-2" >
											</p> 
											<div class="col-md-12 table-responsive" >
												<!--<table class="table-toks2" >
													<thead>
														<tr>
															<th>Fases de Formaci??n</th>
															<th colspan="3">B??sico</th>
															<th colspan="3">Intermedio</th>
															<th colspan="3">Avanzado</th>
														</tr>
														<tr>
															<th>L??neas / Cuatrimestres</th>
															<th>Primero</th>
															<th>Segundo</th>
															<th>Tercero</th>
															<th>Cuarto</th>
															<th>Quinto</th>
															<th>Sexto</th>
															<th>S??ptimo</th>
															<th>Octavo</th>
															<th>Noveno</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td rowspan="2"><div class="p_texto_orange" >Formaci??n B??sica</div></td>
															<td>*Matem??ticas para Administraci??n I</td>
															<td>*Matem??ticas para Administraci??n II</td>
															<td>*Matem??ticas para Administraci??n III</td>
															<td rowspan="2" >Contabilidad</td>
															<td rowspan="2" >Estadistica Aplicada a la Administraci??n</td>
															<td>Administraci??n del Capital Humano</td>
															<td rowspan="2">Administraci??n de Operaciones</td>
															<td rowspan="2">Mercadotecnia Estrat??gica </td>
															<td rowspan="2">Procesos y Calidad</td>
														</tr>
														<tr>
															<td>*Introducci??n a la Administraci??n I</td>
															<td>*Macroeconom??a</td>
															<td>Macroeconom??a</td>
															<td>Finanzas</td>
												
														</tr>
														<tr>
															<td><div class="p_texto_orange" >Gerencial</div></td>
															<td></td>
															<td></td>
															<td>Introducci??n a la Empresa</td>
															<td >Desarrollo de Habilidades Gerenciales</td>
															<td >Direcci??n y Liderazgo</td>
															<td>Pensamiento Estrat??gico</td>
															<td>Ejecuci??n y Negociaci??n </td>
															<td>Administraci??n y Manejo del Desempe??o</td>
															<td>Gerenciamiento de Centro</td>
														</tr>
														<tr>
															<td><div class="p_texto_orange" >Desarrollo Humano</div></td>
															<td>Pensamiento L??gico</td>
															<td>??tica Laboral</td>
															<td>Comunicaci??n e Imagen</td>
															<td ></td>
															<td ></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td><div class="p_texto_orange" >Ingl??s</div></td>
															<td></td>
															<td></td>
															<td></td>
															<td ></td>
															<td ></td>
															<td>Ingl??s para Negocios I</td>
															<td>Ingl??s para Negocios II</td>
															<td></td>
															<td></td>
														</tr>

														<tr>
															<td><div class="p_texto_orange" >Desarrollo Organizacional</div></td>
															<td>Cultura Organzacional</td>
															<td>Psicolog??a Organizacional</td>
															<td>Aprendizaje	Organizacional</td>
															<td ></td>
															<td >Organizaci??n y Desarrollo</td>
															<td></td>
															<td>Manejo de Personal y Trabajo en Equipo</td>
															<td>Comunicaci??n Organizacional</td>
															<td>Marco Jur??dico</td>
														</tr>
														<tr>
															<td><div class="p_texto_orange" >Tecnol??gica</div></td>
															<td>Tecnolog??as de la Informaci??n I</td>
															<td>Tecnolog??as de la Informaci??n II</td>
															<td></td>
															<td ></td>
															<td ></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td colspan="4"><div class="p_texto_orange" >Acentuaci??n en Administraci??n de Restaurantes</div></td>
															<td >Servicios de Alimentos y Bebidas</td>
															<td >Procesos y Preparaci??n de Alimentos</td>
															<td>Estrategias de Compras y Abastecimiento</td>
															<td>Tendencias de Gastronom??a</td>
															<td>Certificaciones de Calidad para Restaurantes</td>
															<td>An??lisis de Costos de Alimentos y Bebidas</td>
														</tr>
													</tbody>
												</table> -->


												<!--================================  PLAN ESTUDIO 2 =======================-->


												<table class="table-toks2" >
													<thead>
														<tr>
															<th>Fases de Formaci??n</th>
															<th colspan="3">B??sico</th>
															<th colspan="4">Intermedio</th>
															<th colspan="3">Avanzado</th>
														</tr>
														<tr>
															<th>L??neas / Cuatrimestres</th>
															<th>Primero</th>
															<th>Segundo</th>
															<th>Tercero</th>
															<th>Cuarto</th>
															<th>Quinto</th>
															<th>Sexto</th>
															<th>S??ptimo</th>
															<th>Octavo</th>
															<th>Noveno</th>
															<th>D??cimo</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td rowspan="2"><div class="p_texto_orange" >Econom??a y Negocios</div></td>

															<td>Razonamiento L??gico Matem??tico para la Toma de Decisiones</td>
															<td>Matem??ticas para Administraci??n</td>
															<td>Matem??ticas Financieras</td>
															<td >Estad??stica Aplicada a la Administraci??n</td>
															<td >Mercadotecnia Estrat??gica</td>
															<td  rowspan="2" >An??lisis de la Informaci??n Financiera</td>
															<td >Finanzas Empresariales</td>
															<td >Evaluaci??n de Proyectos y Fuentes de Financiamiento</td>
															<td rowspan="2">Administraci??n de Operaciones II</td>
															<td rowspan="2">Instrumentos de Presupuestaci??n Empresarial</td>

														</tr>
														<tr>
															<!--<td rowspan="2"><div class="p_texto_orange" >Formaci??n B??sica</div></td>-->
															<td>Introducci??n a la Administraci??n </td>
															<td>Econom??a de la Empresa</td>
															<td>Entorno Macroecon??mico</td>
															<td >Informaci??n Financiera para la Toma de Decisiones</td>
															<td >Contabilidad y Administraci??n de Costos</td>
															<!--<td ></td>-->
															<td>Administraci??n de la Remuneraci??n</td>
															<td>Administraci??n de Operaciones I</td>
															<!--<td rowspan="2">Mercadotecnia Estrat??gica </td>
															<td rowspan="2">Procesos y Calidad</td>-->
														</tr>
														<tr>
															<td rowspan="2"><div class="p_texto_orange" >Desarrollo Organizacional</div></td>
															<td>Entorno y Cambio Organizacional</td>
															<td>Desarrollo de Habilidades Gerenciales</td>
															<td>Comportamiento Organizacional</td>
															<td >Administraci??n del Capital Humano</td>
															<td></td>
															<td></td>
															<td></td>
															<td>Auditor??a Integral</td>
															<td>Estrategias de Administraci??n de la Calidad</td>
															<td>Seminario de Investigaci??n</td>
														</tr>
														<tr>
															<!--<td><div class="p_texto_orange" >Desarrollo Humano</div></td>-->
															<td>Psicolog??a Organizacional</td>
															<td>Organizaci??n y Desarrollo</td>
															<td>Derecho Laboral</td>
															<td>Desarrollo Sustentable y las Organizaciones</td>
															<td >Seguridad e Higiene en el Trabajo</td>
															<td>Desarrollo del Talento Humano</td>
															<td>Marco Legal de los Negocios</td>
															<td>??tica en las Organizaciones</td>
															<td>Control de Gesti??n</td>
															<td></td>
														</tr>
														<tr>
															<td><div class="p_texto_orange" >Desarrollo Humano</div></td>
															<td>Teor??a del Conocimiento</td>
															<td></td>
															<td></td>
															<td></td>
															<td >Direcci??n y Liderazgo</td>
															<td>Comunicaci??n e Imagen Corporativa</td>
															<td></td>
															<td></td>
															<td></td>
															<td>Coaching Empresarial</td>

														</tr>
														<tr>
															<td><div class="p_texto_orange" >Comunicaci??n para el Desarrollo Empresarial</div></td>
															<td></td>
															<td>Tecnolog??as de Informaci??n para los Negocios I</td>
															<td>Tecnolog??as de Informaci??n para los Negocios II</td>
															<td></td>
															<td></td>
															<td>Ingl??s para Negocios I</td>
															<td>Ingl??s para Negocios II</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr>
															<td colspan="4"><div class="p_texto_orange" >Acentuaci??n en Administraci??n de Restaurantes</div></td>
															<td >Servicio de Alimentos y Bebidas</td>
															<td >Gastronom??a</td>
															<td>T??cnicas para la Administraci??n del Capital de Trabajo</td>
															<td>Direcci??n y Desarrollo de los Planes Estrat??gicos para la Empresa Restaurantera</td>
															<td>Conservaci??n de Alimentos</td>
															<td>Administraci??n Estrat??gica de la Cadena de Suministro</td>
															<td>Gesti??n de la Calidad, Seguridad e Higiene Alimentaria</td>
														</tr>
													</tbody>
												</table>


											</div>
											<br>
											<div class="subtitulo_orange col-md-12" ><h4><strong>REQUISITOS DE ADMISI??N</strong></h4></div>
											<p class="p_texto col-md-4 col-md-offset-4">
											

											</p>
											<p class="p_texto col-md-6 col-md-offset-3" >
												Certificado de Preparatoria Original
												<br>
												Acta de Nacimiento Original
												<br>
												Solicitud de Inscripci??n
											</p>
						</div>
					</div>
				</div>
		</div>

		<div class="section_noscroll" section="3"  type="noscroll" id="section_3"  style="display:none; "  >
				<div class="content-complete-noscroll vertical-center" style=" background-color: #e6e6e6;" >

					<div class="row">
					<p>&nbsp;</p>
					<p>&nbsp;</p>
						<div class="col-md-10 col-md-offset-1 text-center borde-marco"  style="margin-top:40px; margin-bottom:100px;" >
											<div class="subtitulo titulo-marco" ><div class="col-md-4 col-md-offset-4" style="background-color: black;" ><h4 class="submarco-noscroll"  ><strong>CALENDARIO</strong></h4></div></div>
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