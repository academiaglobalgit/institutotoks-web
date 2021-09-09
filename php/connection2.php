<?php
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","Sony1138");
define("DB_NAME","prepatoks");
/*
define("DB_SERVER","agcollege.edu.mx");
define("DB_USER","inscripciontoks");
define("DB_PASS","1fdc95c22575b4dd36734773f425b92f");
define("DB_NAME","prepatoks");*/
class Conexion{


    function conexion() {
        $conexion = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

        if ($conexion->connect_errno) {
            printf("Problemas con la conexión a la base de datos: %s\n", $conexion->connect_error);
            exit();
        }

        $conexion->query('SET NAMES "utf8mb4"');


        return $conexion;
    }


}

?>