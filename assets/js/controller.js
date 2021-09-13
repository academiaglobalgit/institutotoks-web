$(document).ready(function() {

    validar_form_contacto();
    validar_form_preinscripcion();
    combobox_estados();
    combobox_ciudades();
    combobox_establecimientos2();
    combobox_estados_2();
    combobox_ciudades_2();

    $.getJSON("https://api.ipify.org?format=json", function(data) {
        $("#ip").val(data.ip);
    });


    let browser = (function() {
        var test = function(regexp) { return regexp.test(window.navigator.userAgent) }
        switch (true) {
            case test(/edg/i):
                return "Microsoft Edge";
            case test(/trident/i):
                return "Microsoft Internet Explorer";
            case test(/firefox|fxios/i):
                return "Mozilla Firefox";
            case test(/opr\//i):
                return "Opera";
            case test(/ucbrowser/i):
                return "UC Browser";
            case test(/samsungbrowser/i):
                return "Samsung Browser";
            case test(/chrome|chromium|crios/i):
                return "Google Chrome";
            case test(/safari/i):
                return "Apple Safari";
            default:
                return "Other";
        }
    })();

    $('#browser').val(browser);

    $("#btn_inscripcion_preparatoria").click(function() {
        $('#inscripcion_tipo').val(1); // asigna el tipo de inscripción a 1 = preparatoria 
        $('#myModalLabel_inscripcion').empty().append("Ficha de Pre-Inscripción para Preparatoria");
        $('#inscripcion').modal('show');
    });

    $("#btn_inscripcion_licenciatura").click(function() {
        $('#inscripcion_tipo').val(2); // asigna el tipo de inscripción a 2 = licenciatura 
        $('#myModalLabel_inscripcion').empty().append("Ficha de Pre-Inscripción para Licenciatura");
        $('#inscripcion').modal('show');
    });

    $("#btn_inscripcion_preparatoria2").click(function() {
        $('#inscripcion_tipo').val(1); // asigna el tipo de inscripción a 1 = preparatoria 
        $('#myModalLabel_inscripcion').empty().append("Ficha de Pre-Inscripción para Preparatoria");
        $('#inscripcion').modal('show');
    });

    $("#btn_inscripcion_licenciatura2").click(function() {
        $('#inscripcion_tipo').val(2); // asigna el tipo de inscripción a 2 = licenciatura 
        $('#myModalLabel_inscripcion').empty().append("Ficha de Pre-Inscripción para Licenciatura");
        $('#inscripcion').modal('show');
    });





    var current_section = 1;
    var current_background = 2;

    function SliderPage1() //slides de section_1
    {
        $("#page1_banner1").hide();
        $("#page1_banner2").hide();

        if (current_background == 1) {
            $("#page1_banner1").fadeToggle("fast", function() {});

        } else {
            $("#page1_banner2").fadeToggle("fast", function() {

            });
        }


        SliderBackground();
    }

    function SliderBackground() //slides de section_1
    {
        var image = $('#carousel');
        if (current_background == 1) {

            image.fadeOut(1000, function() {
                image.css({ "background-image": "url(assets/img/foto1-01.png)" });
                image.fadeIn(1000);

            });
            current_background = 2;
        } else {

            image.fadeOut(1000, function() {
                image.css({ "background-image": "url(assets/img/foto2-01.png)" });
                image.fadeIn(1000);

            });


            current_background = 1;

        }
    }

    function TogglePages(input) // cambia la pagina dependiendo de el boton y la section
    {
        var section = input.attr("data-section");
        var tipo = $("#section_" + section).attr("type");
        if ((section.toString() != current_section.toString() && tipo == "noscroll")) {
            $("#scroll").hide();
            $("#noscroll").show();
            $(".section_noscroll").hide();
            $("#section_" + section).fadeIn("fast", function() {});
        } else if ((section.toString() != current_section.toString() && tipo == "scroll")) {

            $("#noscroll").hide();
            $("#scroll").show();
            //$("#section_"+section).fadeIn( "slow", function(){});
        }
        current_section = section;
    }

    $(".menu-button").click(function() {

        TogglePages($(this));

    });

    setInterval(SliderPage1, 8000);


    //$(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    // });


    function validar_form_contacto() {
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
                                regexp: /^[\sa-zA-Z ñÑáéíóúÁÉÍÓÚ-]+$/i,
                                message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
                            },
                            stringLength: {
                                max: 60,
                                min: 2,
                                message: 'El nombre completo debe ser más de 2 y menos de 60 caracteres'
                            }
                        }
                    },
                    correo: {
                        validators: {
                            notEmpty: {
                                message: 'Ingresa tu correo electrónico'
                            },
                            emailAddress: {
                                message: 'Ingrese un correo electrónico válido. ej: example@hotmail.com'
                            }
                        }
                    },
                    telefono: {
                        validators: {
                            html: true,
                            notEmpty: {
                                message: 'Ingresa tu teléfono'
                            },
                            digits: {
                                message: 'El campo solo debe contener dígitos'
                            },
                            stringLength: {
                                min: 10,
                                max: 10,
                                message: 'El número de teléfono debe contener 10 digitos.<br> Lada + número. &nbsp;&nbsp; Ej. xxx xxx-xx-xx'
                            }
                        }
                    },
                    mensaje: {
                        validators: {
                            notEmpty: {
                                message: 'Ingresa tu mensaje'
                            },
                            stringLength: {
                                max: 255,
                                min: 2,
                                message: 'El mensaje debe contener más de 2 y menos de 255 caracteres'
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
                    fv = $form.data('formValidation');





                $.ajax({
                    url: 'php/enviarcorreo.php',
                    type: 'post',
                    dataType: "text",
                    data: $form.serialize(),
                    beforeSend: function() {


                    },
                    success: function(respuesta) {
                        $('#form_contacto').formValidation('resetForm', true);
                        $('#MessageContactoSuccess').modal('show');


                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        $('#MessageContactoError').modal('show');
                        if (XMLHttpRequest.status === 500) {

                        } else {



                        }
                    },

                    complete: function() {

                        $('#form_contacto').formValidation('resetForm', true);

                    }
                });
            });
    }

    function validar_form_preinscripcion() {
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
                            message: 'El campo solo debe contener dígitos'
                        }
                    }
                },
                inscripcion_numTienda: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        }
                    }
                },
                inscripcion_nombreunidad: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[\sa-zA-Z ñÑáéíóúÁÉÍÓÚ-]+$/i,
                            message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
                        },
                        stringLength: {
                            max: 100,
                            min: 2,
                            message: 'El nombre de unidad debe ser más de 2 y menos de 100 caracteres'
                        }
                    }
                },
                inscripcion_apellidoP: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[\sa-zA-Z ñÑáéíóúÁÉÍÓÚ-]+$/i,
                            message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
                        },
                        stringLength: {
                            max: 30,
                            min: 2,
                            message: 'El apellido paterno debe ser más de 2 y menos de 30 caracteres'
                        }
                    }
                },
                inscripcion_apellidoM: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[\sa-zA-Z ñÑáéíóúÁÉÍÓÚ-]+$/i,
                            message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
                        },
                        stringLength: {
                            max: 30,
                            min: 2,
                            message: 'El apellido materno debe ser más de 2 y menos de 30 caracteres'
                        }
                    }
                },
                inscripcion_nombres: {
                    validators: {
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        regexp: {
                            regexp: /^[\sa-zA-Z ñÑáéíóúÁÉÍÓÚ-]+$/i,
                            message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
                        },
                        stringLength: {
                            max: 30,
                            min: 2,
                            message: 'El nombre completo debe ser más de 2 y menos de 30 caracteres'
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
                        html: true,
                        notEmpty: {
                            message: 'El campo es obligatorio.'
                        },
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'El formato no es válido.<br> Formato valido: YYYY-MM-DD  Ej. 1982-01-23'
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
                            message: 'El campo solo debe contener dígitos'
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
                        html: true,
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        digits: {
                            message: 'El campo solo debe contener dígitos'
                        },
                        stringLength: {
                            min: 10,
                            max: 10,
                            message: 'El número de teléfono debe contener 10 digitos.<br> Lada + número de casa. &nbsp;&nbsp; Ej. xxx xxx-xx-xx'
                        }

                    }
                },
                inscripcion_telefonoAlterno: {
                    validators: {
                        html: true,
                        digits: {
                            message: 'El campo solo debe contener dígitos'
                        },
                        stringLength: {
                            min: 10,
                            max: 10,
                            message: 'El número de teléfono debe contener 10 digitos.<br> Lada + número. &nbsp;&nbsp; Ej. (xxx) xxx-xx-xx'
                        }

                    }
                },
                inscripcion_telefonoCelular: {
                    validators: {
                        html: true,
                        digits: {
                            message: 'El campo solo debe contener dígitos'
                        },
                        stringLength: {
                            min: 10,
                            max: 10,
                            message: 'El número de teléfono debe contener 10 digitos.<br> Lada + número celular. &nbsp;&nbsp; Ej. (xxx) xxx-xx-xx'
                        }

                    }
                },
                inscripcion_correo: {
                    validators: {
                        emailAddress: {
                            message: 'Ingrese un correo electrónico válido. ej: example@hotmail.com'
                        }

                    }
                },
                inscripcion_facebook: {
                    validators: {


                    }
                },
                /*
                inscripcion_curp: {
                    validators: {
                        html:true,
                        notEmpty: {
                            message: 'El campo es obligatorio'
                        },
                        regexp:{
                            regexp: (/^([a-z]{4})([0-9]{6})([a-z]{6})([0-9]{2})$/i),
                            message: 'Curp inválida. El Formato del curp es: AAAA######AAAAAA##<br> A = letra <br> # = número'
                        },
                        stringLength: {
                            min: 18,
                            max: 18,
                            message: 'El tamaño del curp son 18 caracteres conformado por letras y números'
                        }

                    }
                },*/

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
                    fv = $form.data('formValidation');

                console.log('go go go');


                $.ajax({
                    url: 'php/homeController.php?a=Agregar_inscripcion',
                    type: 'POST',
                    dataType: "Json",
                    data: $form.serialize(),
                    success: function(data) {
                        console.log("success: " + data);

                        $('#inscripcion').modal('hide');
                        if (data.success == true) {
                            $('#inscripcion_form').formValidation('resetForm', true);
                            $('#MessageSolicitudEnviado').modal('show');

                        } else if (data.success == false) {

                            if (data.message == 'Error al insertar el registro') {

                                //$('#inscripcion_form').formValidation('resetForm', true);
                                $('#MessageInscripcionError').modal('show');

                            } else if (data.message == 'Registro Existente') {

                                //$('#inscripcion_form').formValidation('resetForm', true);
                                $('#MessageSolicitudExistente').modal('show');


                            }


                        } else {
                            $('#MessageInscripcionError').modal('show');

                        }
                    },
                    error: function(data) {
                        console.log("error: " + data.toString());
                        $('#inscripcion').modal('hide');

                        $('#MessageInscripcionError').modal('show');

                    }
                });
            });
        /*Terminan las validaciones para el formulario de inscripcion */
    }

    function combobox_estados() {
        $('#inscripcion_ciudad').prop("disabled", true);
        $('#inscripcion_tienda').prop("disabled", true);
        $('#inscripcion_ciudad_usuario').prop("disabled", true);
        $.ajax({
            url: 'php/homeController.php?a=verEstados',
            type: 'post',
            beforeSend: function() {


            },
            success: function(respuesta) {
                if (respuesta != null) {
                    //console_log(respuesta);
                    //alert(respuesta); 
                    $('#inscripcion_estado').append(respuesta);
                    $('#inscripcion_estado_usuario').append(respuesta);



                } else {

                    //alert('error');
                }

            }


        });
    }

    function combobox_ciudades() {
        $('#inscripcion_estado').change(function() {
            var option = this.options[this.selectedIndex].value;
            $('#inscripcion_ciudad').prop("disabled", false);
            $('#inscripcion_tienda').prop("disabled", true);

            $.ajax({
                url: 'php/homeController.php?a=verCiudades&id=' + option,
                type: 'post',
                beforeSend: function() {


                },
                success: function(respuesta) {

                    if (respuesta != null) {
                        //alert(respuesta);

                        $('#inscripcion_ciudad').html(respuesta);


                    } else {

                        //alert('error');
                    }

                }


            });
        });
    }

    function combobox_establecimientos() {
        $('#inscripcion_ciudad').change(function() {
            var option = this.options[this.selectedIndex].value;
            $('#inscripcion_tienda').prop("disabled", false);
            //alert(option);


            $.ajax({
                url: 'php/homeController.php?a=verEstablecimientos&id=' + option,
                type: 'post',
                beforeSend: function() {


                },
                success: function(respuesta) {

                    if (respuesta != null) {
                        //alert(respuesta);

                        $('#inscripcion_tienda').html(respuesta);


                    } else {

                        //alert('error');
                    }

                }


            });
        });
    }

    function combobox_establecimientos2() {
        $.ajax({
            url: 'php/homeController.php?a=verEstablecimientos2',
            type: 'post',
            beforeSend: function() {


            },
            success: function(respuesta) {

                if (respuesta != null) {
                    //alert(respuesta);
                    $('#inscripcion_tienda').removeAttr("disabled");
                    $('#inscripcion_tienda').html(respuesta);

                } else {

                    //alert('error');
                }

            },
            error: function(respuesta) {

            }


        });
    }

    function combobox_estados_2() {

        $('#inscripcion_ciudad_usuario').prop("disabled", true);
        $.ajax({
            url: 'php/homeController.php?a=verEstados2',
            type: 'post',
            beforeSend: function() {


            },
            success: function(respuesta) {

                if (respuesta != null) {
                    //alert(respuesta);


                    $('#inscripcion_estado_usuario').html(respuesta);



                } else {

                    //alert('error');
                }

            }


        });
    }

    function combobox_ciudades_2() {
        $('#inscripcion_estado_usuario').change(function() {
            var option = this.options[this.selectedIndex].value;
            $('#inscripcion_ciudad_usuario').prop("disabled", false);

            $.ajax({
                url: 'php/homeController.php?a=verCiudades2&id=' + option,
                type: 'post',
                beforeSend: function() {


                },
                success: function(respuesta) {

                    if (respuesta != null) {
                        //alert(respuesta);

                        $('#inscripcion_ciudad_usuario').html(respuesta);


                    } else {

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