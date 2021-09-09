<?php
require_once('connection2.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Videoteca extends Conexion{

    public function get_num_periodos(){
        $conexion= $this->conexion();
        mysqli_set_charset($conexion,'utf8');


        $query =   "SELECT
                        COUNT(DISTINCT a.name) AS 'numero_periodos'
                    FROM mdl_course_categories a
                    INNER JOIN mdl_course b ON b.category = a.id AND a.parent = 4";

        $registros = $conexion->query($query);

        if($row = $registros->fetch_assoc()){
            $resultado = $row['numero_periodos'];
        }else{
            $resultado = 0;
        }

        $conexion->close();
        return $resultado;
    }

    public function get_materias_periodos($periodo){
        $conexion= $this->conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "SELECT b.id, b.fullname AS 'nombre' FROM mdl_course_categories a INNER JOIN mdl_course b ON b.category = a.id WHERE a.parent = 4 AND a.depth = 2 AND b.visible = 1 AND a.name = 'periodo ".$periodo."' ORDER BY b.sortorder ASC";

        $registros = $conexion->query($query);

        $resultado=array();
        if(isset($registros)) {

            while($row = $registros->fetch_assoc())
            {
                $resultado[] = $row;
            }

        }else{
            $resultado["message"] = "No hay ningún registro";
        }

        $datos=json_decode(json_encode($resultado));
        $conexion->close();
        return $datos;
    }

    public function get_videos_materia($materia){
        $conexion= $this->conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "SELECT id, titulo, url FROM ag_videos WHERE id_materia = ".$materia." ORDER BY secuencia";

        $registros = $conexion->query($query);

        $resultado=array();
        if(isset($registros)) {

            while($row = $registros->fetch_assoc())
            {
                $resultado[] = $row;
            }

        }else{
            $resultado["message"] = "No hay ningún registro";
        }

        $datos=json_decode(json_encode($resultado));
        $conexion->close();
        return $datos;
    }

    public function get_select_video($video){
        $conexion= $this->conexion();
        mysqli_set_charset($conexion,'utf8');

        $query = "SELECT
									id, titulo, url
								FROM ag_videos
								WHERE id = '$video'
								ORDER BY secuencia";

        $registros = $conexion->query($query);


        if($row = $registros->fetch_assoc()){
            $resultado['id'] = $row['id'];
            $resultado['titulo'] = $row['titulo'];
            $resultado['url'] = $row['url'];
        }else {
            $resultado['success'] = false;
        }


        $datos=json_decode(json_encode($resultado));
        $conexion->close();
        return $datos;
    }
}

?>