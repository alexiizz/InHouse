<?php
            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "inhouse";
            $conexion = new mysqli($host, $user, $pw, $db);
            if($conexion -> connect_errno)
            {
                die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion -> mysqli_connect_errno());

            }
            //problemas con caracteres especiales en la BD
            mysqli_set_charset($conexion,'utf8');
            $casas= "SELECT * FROM inmueble WHERE `idinmueble`=1";
            $res = $conexion->query($casas); 
            $casas2= "SELECT * FROM inmueble WHERE `idinmueble`=2";
            $res2 = $conexion->query($casas2);
?>