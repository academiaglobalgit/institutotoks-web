<?php
/*define("DB_SERVER","agcollege.edu.mx");
define("DB_USER","inscripciontoks");
define("DB_PASS","1fdc95c22575b4dd36734773f425b92f");
define("DB_NAME","prepatoks");*/

define("DB_SERVER","localhost");
define("DB_USER","usertoks");
define("DB_PASS","i2dDNZ3pt44DYJw9a06kfxP84N0Wq0Df");
define("DB_NAME","prepatoks");



function conexion() {
    $conexion = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

    if ($conexion->connect_errno) {
        printf("Problemas con la conexión a la base de datos: %s\n", $conexion->connect_error);
        exit();
    }

    $conexion->query('SET NAMES "utf8mb4"');


    return $conexion;
}


?>