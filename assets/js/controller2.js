$( document ).ready(function() {
	// validar_form_contacto();
	//validar_form_preinscripcion();
   /* combobox_estados();
    combobox_ciudades();*/
    //combobox_establecimientos2();
    //combobox_estados_2();
   // combobox_ciudades_2();
     
        
	 $(".submarco").click(function(){
	 	$('#inscripcion').modal('show');
	 });

		var current_section=1;
		var current_background=2;
 		function SliderPage1() //slides de section_1
 		{
 			$("#page1_banner1").hide();
 			$("#page1_banner2").hide();

			if(current_background==1){
				$("#page1_banner1").fadeToggle( "fast", function() {
 				});

 			}else{
				$("#page1_banner2").fadeToggle( "fast", function() {

 				});
 			}


 			SliderBackground();	
 		}

 		function SliderBackground() //slides de section_1
 		{
 			var image = $('#carousel');
 			if(current_background==1){

				    image.fadeOut(1000, function () {
				        image.css({"background-image" : "url(assets/img/foto1-01.png)"});
				        image.fadeIn(1000);
				       
				    });
 				current_background=2;
 			}else{

				     image.fadeOut(1000, function () {
				        image.css({"background-image":"url(assets/img/foto2-01.png)"});
				        image.fadeIn(1000);
			
				    });


 				 current_background=1;

 			}
 		}
 		function TogglePages(input) // cambia la pagina dependiendo de el boton y la section
 		{
 			var section= input.attr("data-section");
 			var tipo=$("#section_"+section).attr("type");
 			if((section.toString() != current_section.toString() && tipo=="noscroll")){
 				$("#scroll").hide();
 				$("#noscroll").show();
 				$(".section_noscroll").hide();
	 			$("#section_"+section).fadeIn( "fast", function(){
                    if(section==3){
                          $("#calendar").show();
                          var d = new Date();
                       $('#calendar').fullCalendar({
                            header: {
                                left: 'prev,next today',
                                center: 'title',
                                right: 'month'
                                
                            },
                            defaultDate: d,
                            lang: 'es',
                            firstDay:0,
                            buttonIcons: false, // show the prev/next text
                            weekNumbers: false,
                            editable: false,
                            eventLimit: false, // allow "more" link when too many events

                            events: [
                            ]
                        });
                    }
                  
                });

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

		setInterval(SliderPage1, 8000);


      //$(function() {
          $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html,body').animate({
                  scrollTop: target.offset().top
                }, 1000);
                return false;
              }
            }
          });
       // });


          function validar_form_contacto(){
		        $('#form_contacto').formValidation({
		            framework: 'bootstrap',
		            excluded: ':disabled',
		            icon: {
		                valid: '',
		                invalid: '',
		                validating: 'fa fa-refresh fa-lg'
		            },
		            fields: {
		                nombre: {
		                    validators: {
		                        notEmpty: {
		                            message: 'Ingresa tu nombre'
		                        },
		                        regexp: {
		                            regexp: /^[\sa-zA-Z ????????????????????????-]+$/i,
		                            message: 'El formato del campo es inv??lido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
		                        },
		                        stringLength: {
		                            max:60,
		                            min: 2,
		                            message: 'El nombre completo debe ser m??s de 2 y menos de 60 caracteres'
		                        }
		                    }
		                },
		                correo: {
		                    validators: {
		                        notEmpty: {
		                            message: 'Ingresa tu correo electr??nico'
		                        },
		                        emailAddress:{
		                            message: 'Ingrese un correo electr??nico v??lido. ej: example@hotmail.com'
		                        }
		                    }
		                },
		                telefono: {
		                    validators: {
		                        html:true,
		                        notEmpty: {
		                            message: 'Ingresa tu tel??fono'
		                        },
		                        digits: {
		                            message: 'El campo solo debe contener d??gitos'
		                        },
		                        stringLength: {
		                            min: 10,
		                            max: 10,
		                            message: 'El n??mero de tel??fono debe contener 10 digitos.<br> Lada + n??mero. &nbsp;&nbsp; Ej. xxx xxx-xx-xx'
		                        }
		                    }
		                },
		                mensaje: {
		                    validators: {
		                        notEmpty: {
		                            message: 'Ingresa tu mensaje'
		                        },
		                        stringLength: {
		                            max:255,
		                            min: 2,
		                            message: 'El mensaje debe contener m??s de 2 y menos de 255 caracteres'
		                        }
		                    }
		                }



		            }
		        })
		            .on('err.form.fv', function(e) {
		                $('.MessageContactoError').modal('show');

		            })
		            .on('success.form.fv', function(e) {


		                e.preventDefault();

		                var $form = $(e.target),
		                    fv    = $form.data('formValidation');



		                $.ajax({
		                    url: 'php/enviarcorreo.php',
		                    type: 'post',
		                    dataType: "text",
		                    data: $form.serialize(),
		                    beforeSend: function ()
		                    {


		                    },
		                    success:  function (respuesta)
		                    {
		                        $('#form_contacto').formValidation('resetForm', true);
		                        $('#MessageContactoSuccess').modal('show');


		                    },
		                    error: function (XMLHttpRequest, textStatus, errorThrown) {
		                        $('#MessageContactoError').modal('show');
		                        if (XMLHttpRequest.status === 500) {

		                        }else{



		                        }
		                    },

		                    complete: function()
		                    {

		                        $('#form_contacto').formValidation('resetForm', true);

		                    }
		                });
		            });
    	}

  function validar_form_preinscripcion(){
        $('#inscripcion_form').formValidation({
            framework: 'bootstrap',
            excluded: ':disabled',
            icon: {
                valid: '',
                invalid: '',
                validating: 'fa fa-refresh fa-2x'
            },
            fields: {
                inscripcion_numEmpleado: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio.'
                        },
                        digits: {
                            message: 'El campo solo debe contener d??gitos'
                        }
                    }
                },
                inscripcion_estado: {
                    validators: {
                        notEmpty: {
                            message: 'Seleccione su estado'
                        }
                    }
                },
                inscripcion_ciudad: {
                    validators: {
                        notEmpty: {
                            message: 'Seleccione su ciudad'
                        }
                    }
                },
                inscripcion_numTienda: {
                    validators: {
                        notEmpty: {
                            message: 'Seleccione su tienda'
                        }
                    }
                },
                inscripcion_apellidoP: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[\sa-zA-Z ????????????????????????-]+$/i,
                            message: 'El formato del campo es inv??lido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
                        },
                        stringLength: {
                            max:30,
                            min: 2,
                            message: 'El apellido paterno debe ser m??s de 2 y menos de 30 caracteres'
                        }
                    }
                },
                inscripcion_apellidoM: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[\sa-zA-Z ????????????????????????-]+$/i,
                            message: 'El formato del campo es inv??lido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
                        },
                        stringLength: {
                            max:30,
                            min: 2,
                            message: 'El apellido materno debe ser m??s de 2 y menos de 30 caracteres'
                        }
                    }
                },
                inscripcion_nombres: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[\sa-zA-Z ????????????????????????-]+$/i,
                            message: 'El formato del campo es inv??lido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
                        },
                        stringLength: {
                            max:30,
                            min: 2,
                            message: 'El nombre completo debe ser m??s de 2 y menos de 30 caracteres'
                        }
                    }
                },
                inscripcion_sexo: {
                    validators: {
                        notEmpty: {
                            message: 'Seleccione el sexo'
                        }
                    }
                },
                inscripcion_estadoCivil: {
                    validators: {
                        notEmpty: {
                            message: 'Seleccione un estado civil'
                        }
                    }
                },
                inscripcion_fecha: {
                    validators: {
                        html:true,
                        notEmpty: {
                            message: 'El campo es obligatorio.'
                        },
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'El formato no es v??lido.<br> Formato valido: YYYY-MM-DD  Ej. 1982-01-23'
                        }
                    }
                },
                inscripcion_calle: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        }
                    }
                },
                inscripcion_numeroCasa: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        }
                    }
                },
                inscripcion_colonia: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        }
                    }
                },
                inscripcion_codigoPostal: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        digits: {
                            message: 'El campo solo debe contener d??gitos'
                        },
                        stringLength: {
                            min: 5,
                            max: 5,
                            message: 'El codigo postal debe contener 5 digitos'
                        }
                    }
                },
                inscripcion_ciudad_usuario: {
                    validators: {
                        notEmpty: {
                            message: 'Seleccione su ciudad'
                        }
                    }
                },
                inscripcion_estado_usuario: {
                    validators: {
                        notEmpty: {
                            message: 'Seleccione su estado'
                        }
                    }
                },
                inscripcion_telefonoCasa: {
                    validators: {
                        html:true,
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        digits: {
                            message: 'El campo solo debe contener d??gitos'
                        },
                        stringLength: {
                            min: 10,
                            max: 10,
                            message: 'El n??mero de tel??fono debe contener 10 digitos.<br> Lada + n??mero de casa. &nbsp;&nbsp; Ej. xxx xxx-xx-xx'
                        }

                    }
                },
                inscripcion_telefonoAlterno: {
                    validators: {
                        html:true,
                        digits: {
                            message: 'El campo solo debe contener d??gitos'
                        },
                        stringLength: {
                            min: 10,
                            max: 10,
                            message: 'El n??mero de tel??fono debe contener 10 digitos.<br> Lada + n??mero. &nbsp;&nbsp; Ej. (xxx) xxx-xx-xx'
                        }

                    }
                },
                inscripcion_telefonoCelular: {
                    validators: {
                        html:true,
                        digits: {
                            message: 'El campo solo debe contener d??gitos'
                        },
                        stringLength: {
                            min: 10,
                            max: 10,
                            message: 'El n??mero de tel??fono debe contener 10 digitos.<br> Lada + n??mero celular. &nbsp;&nbsp; Ej. (xxx) xxx-xx-xx'
                        }

                    }
                },
                inscripcion_correo: {
                    validators: {
                        emailAddress:{
                            message: 'Ingrese un correo electr??nico v??lido. ej: example@hotmail.com'
                        }

                    }
                },
                inscripcion_facebook: {
                    validators: {


                    }
                },
                inscripcion_curp: {
                    validators: {
                        html:true,
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        regexp:{
                            regexp: (/^([a-z]{4})([0-9]{6})([a-z]{6})([0-9]{2})$/i),
                            message: 'Curp inv??lida. El Formato del curp es: AAAA######AAAAAA##<br> A = letra <br> # = n??mero'
                        },
                        stringLength: {
                            min: 18,
                            max: 18,
                            message: 'El tama??o del curp son 18 caracteres conformado por letras y n??meros'
                        }

                    }
                },
                firma: {
                    validators: {
                        notEmpty: {
                            message: 'Debes aceptar el acuerdo.'
                        }
                    }
                }



            }
        })

            .on('err.form.fv', function(e) {
                $('#errors').html('Favor de verificar los campos');

            })
            .on('success.form.fv', function(e) {

                e.preventDefault();

                var $form = $(e.target),
                    fv    = $form.data('formValidation');


                $.ajax({
                    url: 'php/homeController.php?a=Agregar_inscripcion',
                    type: 'POST',
                    dataType: "Json",
                    data: $form.serialize(),
                    success: function(data) {
                          console.log("success: "+data);

                        $('#inscripcion').modal('hide');
                        if(data.success == true){
                            $('#inscripcion_form').formValidation('resetForm', true);
                            $('#MessageSolicitudEnviado').modal('show');

                        }else if(data.success == false){

                            if(data.message =="Error al insertar el registro."){

                                //$('#inscripcion_form').formValidation('resetForm', true);
                                $('#MessageInscripcionError').modal('show');

                            }else if(data.message == "Registro Existente"){

                                //$('#inscripcion_form').formValidation('resetForm', true);
                                $('#MessageSolicitudExistente').modal('show');


                            }


                        }else{
                            $('#MessageInscripcionError').modal('show');

                        }
                    },
                    error: function(data){
                         console.log("error: "+data.toString());
                         $('#inscripcion').modal('hide');

                                $('#MessageInscripcionError').modal('show');

                    }
                });
            });
        /*Terminan las validaciones para el formulario de inscripcion */
    }

function combobox_estados(){
        $('#inscripcion_ciudad').prop("disabled", true);
        $('#inscripcion_tienda').prop("disabled", true);
        $('#inscripcion_ciudad_usuario').prop("disabled", true);
        $.ajax
        ({
            url:   'php/homeController.php?a=verEstados',
            type:  'post',
            beforeSend: function ()
            {


            },
            success:  function (respuesta)
            {

                if(respuesta != null)
                {
                    //alert(respuesta);

                    $('#inscripcion_estado').html(respuesta);
                    $('#inscripcion_estado_usuario').html(respuesta);



                }
                else
                {

                    //alert('error');
                }

            }


        });
    }
    function combobox_ciudades(){
        $('#inscripcion_estado').change(function(){
            var option = this.options[this.selectedIndex].value;
            $('#inscripcion_ciudad').prop("disabled", false);
            $('#inscripcion_tienda').prop("disabled", true);

            $.ajax
            ({
                url:   'php/homeController.php?a=verCiudades&id='+option,
                type:  'post',
                beforeSend: function ()
                {


                },
                success:  function (respuesta)
                {

                    if(respuesta != null)
                    {
                        //alert(respuesta);

                        $('#inscripcion_ciudad').html(respuesta);


                    }
                    else
                    {

                        //alert('error');
                    }

                }


            });
        });
    }
    function combobox_establecimientos(){
        $('#inscripcion_ciudad').change(function(){
            var option = this.options[this.selectedIndex].value;
            $('#inscripcion_tienda').prop("disabled", false);
            //alert(option);


            $.ajax
            ({
                url:   'php/homeController.php?a=verEstablecimientos&id='+option,
                type:  'post',
                beforeSend: function ()
                {


                },
                success:  function (respuesta)
                {

                    if(respuesta != null)
                    {
                        //alert(respuesta);

                        $('#inscripcion_tienda').html(respuesta);


                    }
                    else
                    {

                        //alert('error');
                    }

                }


            });
        });
    }

    function combobox_establecimientos2(){
        $.ajax
        ({
            url:   'php/homeController.php?a=verEstablecimientos2',
            type:  'post',
            beforeSend: function ()
            {


            },
            success:  function (respuesta)
            {

                if(respuesta != null)
                {
                    //alert(respuesta);
                    $('#inscripcion_tienda').removeAttr("disabled");
                    $('#inscripcion_tienda').html(respuesta);

                }
                else
                {

                    //alert('error');
                }

            },
            error:function (respuesta){

            }


        });
    }

    function combobox_estados_2(){

        $('#inscripcion_ciudad_usuario').prop("disabled", true);
        $.ajax
        ({
            url:   'php/homeController.php?a=verEstados2',
            type:  'post',
            beforeSend: function ()
            {


            },
            success:  function (respuesta)
            {

                if(respuesta != null)
                {
                    //alert(respuesta);


                    $('#inscripcion_estado_usuario').html(respuesta);



                }
                else
                {

                    //alert('error');
                }

            }


        });
    }
    function combobox_ciudades_2(){
        $('#inscripcion_estado_usuario').change(function(){
            var option = this.options[this.selectedIndex].value;
            $('#inscripcion_ciudad_usuario').prop("disabled", false);

            $.ajax
            ({
                url:   'php/homeController.php?a=verCiudades2&id='+option,
                type:  'post',
                beforeSend: function ()
                {


                },
                success:  function (respuesta)
                {

                    if(respuesta != null)
                    {
                        //alert(respuesta);

                        $('#inscripcion_ciudad_usuario').html(respuesta);


                    }
                    else
                    {

                        //alert('error');
                    }

                }


            });
        });
    }


       /* $('#campo_fecha').datepicker({
            changeMonth: true,
            changeYear: true
            });*/



 });