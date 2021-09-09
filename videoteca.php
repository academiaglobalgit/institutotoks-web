<?php

/*require_once($CFG->libdir.'/gradelib.php');
require_once($CFG->dirroot.'/grade/querylib.php');*/
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include_once('php/videoteca.php');
$videoteca = new Videoteca();
?>


<!doctype html>
<html lang="en">
<head>
<!-- Scripts Generales -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>

<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/formValidation.js"></script>
<script src="assets/js/framework/bootstrap.min.js"></script>
<script >
    $( document ).ready(function() {

            function TogglePages(input) // cambia la pagina dependiendo de el boton y la section
        {
            var section= input.attr("data-section");
            var tipo=$("#section_"+section).attr("type");
            if((section.toString() != current_section.toString() && tipo=="noscroll")){
                $("#scroll").hide();
                $("#noscroll").show();
                $(".section_noscroll").hide();
                $("#section_"+section).fadeIn( "fast", function(){});
            }else if((section.toString() != current_section.toString() && tipo=="scroll")){
                
                $("#noscroll").hide();
                $("#scroll").show();
                //$("#section_"+section).fadeIn( "slow", function(){});
            }
            current_section=section;
        }
        
        $( ".menu-button" ).click(function() {
            
            TogglePages($( this ));
            
        });

    });
</script>

<!--<script src="assets/css/pie/PIE.js"></script>-->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if gt IE 7]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.js"></script>
<script src="assets/js/cssqueries.js"></script>
    <style>


    </style>
<![endif]-->

<!-- Globals Scripts -->
    <?php 



    include('includes/styles.php'); 
    ?>
    <link rel="stylesheet" href="assets/css/videoteca.css"/>

</head>
<body style="padding-bottom: 130px; padding-top: 0px;">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand menu-button logo-brand"  data-section="1"  href="index.php#section_1"><img  alt="Toks" src="assets/img/logo-instituto.jpg" class="logo-brand-img" ></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <!--<div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="menu-black "  ><a data-section="2" href="index.php#section_2" class="menu-button" >QUIÉNES SOMOS</a></li>
          <li class="menu-orange menu-button" data-section="3"><a href="index.php#section_3">PREPARATORIA</a></li>
          <li class="menu-orange menu-button" data-section="4"><a href="#">LICENCIATURA</a></li>
          <li class="menu-orange2 menu-button" data-section="5"><a href="#">ESTUDIOS CURRICULARES</a></li>
          <li class="menu-orange3 menu-button" data-section="6" data-toggle="modal" data-target="#biblioteca" ><a href="#">BIBLIOTECA VIRTUAL</a></li>
          <li class="menu-orange3 menu-button" data-section="66" data-toggle="modal" data-target="#videoteca" ><a href="#">VIDEOTECA VIRTUAL</a></li>

          <li class="menu-orange4" ><a data-section="7" href="#section_7" class="menu-button" >INSCRIBIRME</a></li>
          <li class="menu-brown menu-button" ><a href="#section_8" class="menu-button" data-section="8" >CONTACTO</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>
<!-- Explicación de la página -->
<section id="heading_videoteca" >


            <div  class="hidden-xs" style="right:0px; top:0px; width:100%; position:fixed; z-index:999;"  >
        <div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="background-color: black; width:250px;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px; "  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
        </div>
        <div class="subtitulo hidden-xs" ><div class="pull-right col-md-2" style="margin-right:10px; width:250px; background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
        </div>
    </div>

    <div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:50px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white; font-size:13px;"  href="http://agcollege.edu.mx/toks/universidadtoks" >Licenciatura - Iniciar Sesión </a></strong></h5></div>
    </div>
    <div class="subtitulo hidden-lg hidden-sm hidden-md" style="width:50%; margin-top:100px;" ><div class="pull-left col-md-2" style="background-color: black;" ><h5 class="submarco-noscroll"  ><strong><a style="color: white;"  href="http://agcollege.edu.mx/toks/prepatoks" >Preparatoria - Iniciar Sesión </a></strong></h5></div>
    </div>
    
    <div class="container">
        <div class="row text-center">
                    <p class="p_texto_small"   >
                    <br>
                        <div class="subtitulo " ><div class="col-md-8 col-md-offset-2" style="background-color: black;" ><h2 class="submarco-noscroll"  ><strong>VIDEOTECA VIRTUAL</strong></h2></div></div>
                    </p>
                    <div class="col-md-12">
                <p>
                    Esta sección describe el contenido de cada una de las materias que cursarás en tu preparatoria. Esta información,
                    <br/>
                    además, te ayudará a tener una compresión más clara de las competencias que se espera que desarrolles en tu
                    <br/>
                    vida laboral, familiar y personal, en cada materia.
                </p>
                </div>
        </div>
    </div>
</section>



<!-- Contenido Principal -->
<section id="content_videoteca">
    <div class="container">
        <div class="row">


            <!-- LISTA DE LAS MATERIAS-->
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3" >

                <?php
                $codigo = "";

                $periodos = $videoteca->get_num_periodos();
                if(isset($periodos)){
                    for($i = 1; $i <= $periodos; $i++){
                        $codigo .= "
											<div class='panel panel-default'>
												<div class='panel-heading heading_periodos submit-toks'  role='tab' id='headingTwo'>
													<h4 class='panel-title'>
														<a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#periodo_".$i."' aria-expanded='false' aria-controls='collapseTwo'>
															<span>Periodo ".$i."</span>
														</a>
													</h4>
												</div>
                                                <div id='periodo_".$i."' class='panel-collapse collapse' role='tabpanel' aria-labelledby='headingOne'>
                                                    <div class='panel-body'>
                                                        <table class='table'>
                                                            <tbody>

							";

                        $materias = $videoteca->get_materias_periodos($i);
                        for($num_materias = 0; $num_materias < count($materias); $num_materias++){
                            $materia = $materias[$num_materias];
                            if($materia->id == 24 or $materia->id == 29 or $materia->id == 35 or $materia->id == 40  or $materia->id == 28 ){
                                $videos = 0;
                            }else{
                                $codigo .= "
                                                                <tr>
                                                                    <td class='heading_title_materias'> <h4><strong> ".$materia->nombre." </strong><h4>
									";


                                $videos = $videoteca->get_videos_materia($materia->id);
                                if(count($videos) > 0){
                                    $codigo .= "                    <ul>";
                                    for($num_videos = 0; $num_videos < count($videos); $num_videos++){
                                        $video = $videos[$num_videos];
                                        if($materia->id == 24 or $materia->id== 29 or $materia->id == 35 or $materia->id == 40 or $materia->id == 28 ){
                                            #NO HACE NADA
                                        }else{
                                            $codigo .= "               <li> <h6><a href='videoteca.php?url_video=".$video->id."' class='links_videos' ><span >&bull;</span> ".$video->titulo." </a> </h6> </li>";
                                        }
                                    }
                                }
                                $codigo .= "
                                                                        </ul>
                                                                    </td>
                                                                </tr>
                                    ";
                            }
                        }#termina segundo for
                        $codigo .= "
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                            ";
                    }#termina primer for
                }
                else{
                    $codigo = "NO HAY PERIODOS PARA MOSTRAR.";
                }
                echo $codigo;
                ?>
            </div>

            <!-- Donde se muestra el video-->
            <div class="col-xs-6 col-sm-7 col-md-7 col-lg-9"  style="">

                <nav class="navmenu navmenu-default navmenu-fixed-right" role="navigation" style="margin-left: 0px; background-color: black">

                    <?php

                    if(isset($_GET["url_video"])){

                        $video = $videoteca->get_select_video($_GET["url_video"]);
                        echo "
                                <div class='row'>
                                     <div class='hidden-xs hidden-sm'>
                                        <center>

                                            <h4> <span class='label label-primary submarco-noscroll submit-toks'> ".$video->titulo." </span></h4>
                                            ".$video->url."

                                     </div>

                                     <div class='hidden-md hidden-lg' style='margin-left:20px;'>

                                            <h4 style='margin-left:10px;'> <span class='label label-primary heading_title_video'> ".$video->titulo." </span></h4>
                                            ".$video->url."

                                     </div>
                                </div>


							";
                    }else{

                        echo "

							<div class='locato' style='  color: white; padding-top:10px; padding-bottom: 10px; border-radius: 0px;text-align:center;font-size:1em;'>
							<br/>
							<br/>
							<br/>
							<br/>
							<br/>
							<img src='assets/img/ojo.png' alt='Biblioteca' />
                            <br/>
							Para visualizar un video, selecciona un periodo y, posteriormente el video que <br>
corresponda a la materia de tu interés.</div>

							<div id='wrapper_video' style='margin-top:2%'>
                            <br/>&nbsp;

                            </div>";
                    }

                    ?>

                </nav>
            </div>

        </div>

    </div>
<div class="col-xs-12 col-md-12 footer-top" >
                        <div class="row text-center">
                                <div class="form-group col-md-12 col-xs-12">
                                    <div class="" ><h3>TEL. 01 800 890 9159</h3></div>
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
</section>

<section class="section" type="scroll" section="10" id="section_10"  >

                <div class="col-md-12 col-xs-12 footer-bottom" >
                        <div class="row vertical-center">
                            <!--<a href="#" class="thumbnail">
                              <img src="assets/img/toks_logo.png" alt="toks_logo">
                            </a>-->
                            <div class="col-md-12 text-center">
                                <img alt="" src="assets/img/toks_logo.png" class="imagen-footer" >
                                <img alt="" src="assets/img/logos-02.png" class="imagen-footer" >
                                <img alt="" src="assets/img/logos-03.png" class="imagen-footer" >
                                <img alt="" src="assets/img/logos-04.png" class="imagen-footer" >
                                <img alt="" src="assets/img/logos-05.png" class="imagen-footer"  >
                                <img alt="" src="assets/img/logos-06.png" class="imagen-footer" >
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

</body>

</html>