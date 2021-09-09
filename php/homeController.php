<?php
require_once("homeFunciones.php");
$Alumno = new Alumnos();
$opcion = $_GET['a'];


switch ($opcion){
    case 'verTiendas':
        $data = $Alumno->get_Tiendas();
        break;

    case 'verEstados':
        $data = $Alumno->get_Estados();
        break;

    case 'verCiudades':
        $estado = $_GET['id'];
        $data = $Alumno->get_Ciudades($estado);
        break;

    case 'verEstablecimientos':
        $ciudad = $_GET['id'];
        $data = $Alumno->get_Establecimientos($ciudad);
    break;

    case 'verEstablecimientos2':
        $data = $Alumno->get_Establecimientos2();
    break;

    case 'Agregar_inscripcion':


        
        $inscripcion_tipo =$_POST['inscripcion_tipo']; // prepa=1 o licenciatura=2

        $curp =$_POST['inscripcion_curp'];
        $numero_empleado = $_POST['inscripcion_numEmpleado'];
        //acta
        //certificado
        //status
        $numero_tienda = $_POST['inscripcion_numTienda'];
        $nombre_unidad = ucfirst(strtolower($_POST['inscripcion_nombreunidad']));

        //$estado_tienda = ucfirst(strtolower($_POST['inscripcion_estado']));
        //$ciudad_tienda = ucfirst(strtolower($_POST['inscripcion_ciudad']));
      /*  $estado_tienda = $_POST['inscripcion_estado'];
        $ciudad_tienda = $_POST['inscripcion_ciudad'];*/
       
        $apellido_paterno = ucfirst(strtolower($_POST['inscripcion_apellidoP']));
        $apellido_materno = ucfirst(strtolower($_POST['inscripcion_apellidoM']));
        $nombre =ucfirst(strtolower($_POST['inscripcion_nombres']));
        $sexo = $_POST['inscripcion_sexo'];
        //$edad = $_POST['inscripcion_edad'];
        $estado_civil = $_POST['inscripcion_estadoCivil'];
        $fecha_nacimiento = $_POST['inscripcion_fecha'];

        /* funcion para calcular la edad */
        $edad = $Alumno->calcular_edad($fecha_nacimiento);
        /* Termina funcion */
        $delegacion = ucfirst(strtolower($_POST['inscripcion_delegacion']));
        //$estado_usuario = ucfirst(strtolower($_POST['inscripcion_estado_usuario']));
        //$ciudad_usuario = ucfirst(strtolower($_POST['inscripcion_ciudad_usuario']));
        $estado_usuario = $_POST['inscripcion_estado_usuario'];
        $ciudad_usuario = $_POST['inscripcion_ciudad_usuario'];

          $estado_tienda =  $estado_usuario;
        $ciudad_tienda =$ciudad_usuario;
        $calle=ucfirst(strtolower($_POST['inscripcion_calle']));
        $numero_casa = $_POST['inscripcion_numeroCasa'];
        $colonia = ucfirst(strtolower($_POST['inscripcion_colonia']));
        $codigo_postal = $_POST['inscripcion_codigoPostal'];
        $telefono_casa = $_POST['inscripcion_telefonoCasa'];
        $telefono_alterno = $_POST['inscripcion_telefonoAlterno'];
        $telefono_celular = $_POST['inscripcion_telefonoCelular'];
        $correo = ucfirst(strtolower($_POST['inscripcion_correo']));
        $facebook = ucfirst(strtolower($_POST['inscripcion_facebook']));
        $firma = $_POST['firma'];


        $resultado = $Alumno->Save_Inscripcion($inscripcion_tipo,$curp,$numero_empleado,$numero_tienda,$nombre_unidad,$estado_tienda,$ciudad_tienda,$apellido_paterno,$apellido_materno,$nombre,$sexo,$edad,$estado_civil,$fecha_nacimiento,$delegacion,$estado_usuario,$ciudad_usuario,$calle,$numero_casa,$colonia,$codigo_postal,$telefono_casa,$telefono_alterno,$telefono_celular,$correo,$facebook,$firma);
        echo json_encode($resultado);
        //echo $resultado;
        break;

    case 'verEstados2':
        $data = $Alumno->get_Estados_2();
        break;

    case 'verCiudades2':
        $estado = $_GET['id'];
        $data = $Alumno->get_Ciudades_2($estado);
        break;
}

?>