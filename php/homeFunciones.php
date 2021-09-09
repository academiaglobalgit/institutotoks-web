<?php
require_once('connection.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Alumnos{

    public function get_Tiendas(){
        $conexion= conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "select idsucursal,sucursal
                  from ci_sucursal
                  order by idsucursal";

        $registros = $conexion->query($query);


        if($registros <> null)
        {
            $codigo="<option value='' >Seleccione una opcion...</option>";
            while($row = $registros->fetch_assoc()):
                $codigo .= "<option value='".utf8_encode($row["idsucursal"])."'>".$row["sucursal"]."</option>";

            endwhile;


            echo $codigo;

        }



    }

    public function get_Estados(){
        $conexion= conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "select id,nombre
                    from estados
                    order by id";

        $registros = $conexion->query($query);


        if($registros <> null)
        {
            $codigo="<option value='' >Seleccione un estado...</option>";
            while($row = $registros->fetch_assoc()):
                $codigo .= "<option value='".$row["nombre"]."'>".$row["nombre"]."</option>";

            endwhile;


            echo $codigo;

        }
    }

    public function get_Ciudades($estado){
        $conexion= conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "select municipios.id ,municipios.Nombre as nombre_ciudad
                from municipios
                inner join estados on estados.id = municipios.IdEstado
                where estados.Nombre = '$estado' ";

        $registros = $conexion->query($query);


        if($registros <> null)
        {
            $codigo="<option value='' >Seleccione una ciudad...</option>";
            while($row = $registros->fetch_assoc()):
                $codigo .= "<option value='".$row["nombre_ciudad"]."'>".$row["nombre_ciudad"]."</option>";

            endwhile;


            echo $codigo;

        }
    }

    public function get_Establecimientos($ciudad){
        $conexion= conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "select ci_sucursal.idsucursal,ci_sucursal.sucursal
                    from ci_sucursal
                    inner join municipios on municipios.id = ci_sucursal.idciudad
                    where ci_sucursal.Nombre = '$ciudad'";

        $registros = $conexion->query($query);


        if($registros <> null)
        {
            $codigo="<option value='' >Seleccione un establecimiento...</option>";
            while($row = $registros->fetch_assoc()):
                $codigo .= "<option value='".utf8_encode($row["idsucursal"])."'>".$row["sucursal"]."</option>";

            endwhile;


            echo $codigo;

        }
    }

    public function get_Establecimientos2(){
        $conexion= conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "SELECT s.id,s.nombre FROM escolar.tb_sucursales s where s.id_corporacion=6 ORDER BY s.nombre ASC ";

        $registros = $conexion->query($query);


        if($registros <> null)
        {
            $codigo="<option value='' >Seleccione un establecimiento...</option>";
            while($row = $registros->fetch_assoc()):
                $codigo .= "<option value='".$row["id"]."'>".utf8_encode($row["nombre"])."</option>";

            endwhile;


            echo $codigo;

        }
    }
    public function calcular_edad($date){

            list($Y,$m,$d) = explode("-",$date);
            return( @date("md") < $m.$d ? @date("Y")-$Y-1 : @date("Y")-$Y );
    }

    public function save_Inscripcion($inscripcion_tipo,$curp,$numero_empleado,$numero_tienda,$nombre_unidad,$estado_tienda,$ciudad_tienda,$apellido_paterno,$apellido_materno,$nombre,$sexo,$edad,$estado_civil,$fecha_nacimiento,$delegacion,$estado_usuario,$ciudad_usuario,$calle,$numero_casa,$colonia,$codigo_postal,$telefono_casa,$telefono_alterno,$telefono_celular,$correo,$facebook,$firma){
        $conexion= conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "INSERT INTO
                          cms_preinscripcion (inscripcion_tipo,curp,num_empleado,acta_nacimiento,certificado,estatus,num_tienda,nombre_unidad,estado_tienda,ciudad_tienda,apellido_paterno,apellido_materno,nombre,sexo,edad,estado_civil,fecha_nacimiento,delegacion,estado,ciudad,calle,num_casa,colonia,codigo_postal,telefono_casa,telefono_alterno,telefono_celular,correo,facebook,firma_alumno,created_at,updated_at,tipo,certificado_parcial)
                  VALUES
                          ('$inscripcion_tipo','$curp','$numero_empleado','0','0','0','$numero_tienda','$nombre_unidad','$estado_tienda','$ciudad_tienda','$apellido_paterno','$apellido_materno','$nombre','$sexo','$edad','$estado_civil','$fecha_nacimiento','$delegacion','$estado_usuario','$ciudad_usuario','$calle','$numero_casa','$colonia','$codigo_postal','$telefono_casa','$telefono_alterno','$telefono_celular','$correo','$facebook','$firma',now(),now(),'0','0')";




        $condicion = $this->VerificarPreinscripcion($numero_empleado,$inscripcion_tipo);


        $resultado= array();
        if((int)$condicion == 0 ) { // si este usuario no se ha registrado

            if($registros = $conexion->query($query)){
                $resultado['success'] = true;
                $resultado['message'] = 'Registro guardado con éxito';
            }else {
                $resultado['success'] = false;
                $resultado['message'] = 'Error al insertar el registro';
            }

        }else{ // si ya existe ese numero de empleado registrado y el mismo tipo
            $resultado['success'] = false;
            $resultado['message'] = 'Registro Existente';
        }

        return $resultado;
    }

    public function VerificarPreinscripcion($numEmpleado,$inscripcion_tipo){
        $conexion= conexion();
        $query =    "select count(id) as bandera
                     from cms_preinscripcion
                     where '".$inscripcion_tipo."'=inscripcion_tipo and num_empleado='".$numEmpleado."' ";

        $registros = $conexion->query($query);


        if($row = $registros->fetch_assoc()){
            $resultado = $row['bandera'];
        }else{
            $resultado= 0;

        }

        return $resultado;
    }



    public function get_Estados_2(){
        $conexion= conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "select id,nombre
                    from estados
                    order by id";

        $registros = $conexion->query($query);


        if($registros <> null)
        {
            $codigo="<option value='' >Seleccione un estado...</option>";
            while($row = $registros->fetch_assoc()):
                $codigo .= "<option value='".($row["nombre"])."'>".$row["nombre"]."</option>";

            endwhile;


            echo $codigo;

        }
    }

    public function get_Ciudades_2($estado){
        $conexion= conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "select municipios.id ,municipios.Nombre as nombre_ciudad
                from municipios
                inner join estados on estados.id = municipios.IdEstado
                where estados.Nombre = '$estado' ";

        $registros = $conexion->query($query);


        if($registros <> null)
        {
            $codigo="<option value='' >Seleccione una ciudad...</option>";
            while($row = $registros->fetch_assoc()):
                $codigo .= "<option value='".$row["nombre_ciudad"]."'>".$row["nombre_ciudad"]."</option>";

            endwhile;


            echo $codigo;

        }
    }
}

?>
