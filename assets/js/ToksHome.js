$(document).ready(function(){

    validar_form_contacto();
    validar_form_preinscripcion();

    /*combobox_tiendas();*/
    //combobox_estados();
   // combobox_ciudades();
   // combobox_establecimientos();

     combobox_establecimientos2();
    combobox_estados_2();
    combobox_ciudades_2();

    open_modal_biblioteca();
    close_modal_biblioteca();
    open_modal_videoteca();

    function validar_form_contacto(){
        $('#ley_contacto_bienvenida').formValidation({
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
                            max:60,
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
                        emailAddress:{
                            message: 'Ingrese un correo electrónico válido. ej: example@hotmail.com'
                        }
                    }
                },
                telefono: {
                    validators: {
                        html:true,
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
                            max:255,
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
                    fv    = $form.data('formValidation');



                $.ajax({
                    url: 'enviarcorreo.php',
                    type: 'post',
                    dataType: "text",
                    data: $form.serialize(),
                    beforeSend: function ()
                    {


                    },
                    success:  function (respuesta)
                    {
                        $('#ley_contacto_bienvenida').formValidation('resetForm', true);
                        $('.MessageContactoSuccess').modal('show');


                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        $('.MessageContactoError').modal('show');
                        if (XMLHttpRequest.status === 500) {

                        }else{



                        }
                    },

                    complete: function()
                    {

                        $('#ley_contacto_bienvenida').formValidation('resetForm', true);

                    }
                });
            });
    }
    function validar_form_preinscripcion(){
        $('#ley_inscripcion_form').formValidation({
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
                            regexp: /^[\sa-zA-Z ñÑáéíóúÁÉÍÓÚ-]+$/i,
                            message: 'El formato del campo es inválido. Solo se permiten:<br>*letras<br>*espacio(s) en blanco'
                        },
                        stringLength: {
                            max:30,
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
                            max:30,
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
                            max:30,
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
                        html:true,
                        notEmpty: {
                            message: 'El campo es obligatorio.'
                        },
                        date: {
                            format: 'YYYY-MM-DD',
                            message: 'El formato no es válido.<br> Formato valido: YYYY/MM/DD  Ej. 1982/01/23'
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
                        html:true,
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
                        html:true,
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
                        html:true,
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
                        emailAddress:{
                            message: 'Ingrese un correo electrónico válido. ej: example@hotmail.com'
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
                            message: 'Curp inválida. El Formato del curp es: AAAA######AAAAAA##<br> A = letra <br> # = número'
                        },
                        stringLength: {
                            min: 18,
                            max: 18,
                            message: 'El tamaño del curp son 18 caracteres conformado por letras y números'
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
                    url: 'libs/homeController.php?a=Agregar_inscripcion',
                    type: 'POST',
                    dataType: "Json",
                    data: $form.serialize(),
                    success: function(data) {
                        $('#inscripcion').modal('hide');
                        if(data.success == true){

                            $('#ley_inscripcion_form').formValidation('resetForm', true);
                            $('.MessageSolicitudEnviado').modal('show');

                        }else if(data.success == false){

                            if(data.message =="Error al insertar el registro."){

                                $('#ley_inscripcion_form').formValidation('resetForm', true);
                                $('.MessageInscripcionError').modal('show');

                            }else if(data.message == "Registro Existente"){

                                $('#ley_inscripcion_form').formValidation('resetForm', true);
                                $('.MessageSolicitudExistente').modal('show');


                            }


                        }else{
                            $('.MessageInscripcionError').modal('show');

                        }
                    }
                });
            });
        /*Terminan las validaciones para el formulario de inscripcion */
    }

    function open_modal_biblioteca(){
        $('.show_modal_biblioteca').click(function () {

            $('.modal_biblioteca').modal({
                show: true,
                keyboard: true

            });

        });
    }
    function close_modal_biblioteca(){
        $('.boton_biblioteca_entrar').click(function () {

            $('.modal_biblioteca').modal('hide');

        });
    }
    function open_modal_videoteca(){
        $('.show_modal_videoteca').click(function () {

            $('.modal_videoteca').modal({
                show: true,
                keyboard: true

            });

        });
    }

/* function combobox_tiendas(){
        $.ajax
        ({
            url:   'libs/homeController.php?a=verTiendas',
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
    }*/
    function combobox_estados(){
        $('#inscripcion_ciudad').prop("disabled", true);
      //  $('#inscripcion_tienda').prop("disabled", true);
        $('#inscripcion_ciudad_usuario').prop("disabled", true);
        $.ajax
        ({
            url:   'libs/homeController.php?a=verEstados',
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
          //  $('#inscripcion_tienda').prop("disabled", true);

            $.ajax
            ({
                url:   'libs/homeController.php?a=verCiudades&id='+option,
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



    function combobox_establecimientos2(){
        $.ajax
        ({
            url:   'libs/homeController.php?a=verEstablecimientos2',
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

            }


        });
    }

    function combobox_establecimientos(){
        $('#inscripcion_ciudad').change(function(){
            var option = this.options[this.selectedIndex].value;
            $('#inscripcion_tienda').prop("disabled", false);
            //alert(option);


            $.ajax
            ({
                url:   'libs/homeController.php?a=verEstablecimientos&id='+option,
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

    function combobox_estados_2(){

        $('#inscripcion_ciudad_usuario').prop("disabled", true);
        $.ajax
        ({
            url:   'libs/homeController.php?a=verEstados2',
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
                url:   'libs/homeController.php?a=verCiudades2&id='+option,
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

});