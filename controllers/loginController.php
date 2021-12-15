<?php

include("../models/DB.php");
include("../models/Usuario.php");

try{
    $connection = DBConnection::getConnection();
}
catch(PDOException $e){

    error_log("Error de conexion - " . $e, 0);
    echo "Error de Conexion con la base de datos" . $e;
    exit();
}


if($_SERVER["REQUEST_METHOD"]=="POST"){
    if($_POST["_method"]=="POST"){
        $nombre_usuario = $_POST["nombre_usuario"];
        $contra = $_POST["contra"];
    
     //PDO::PARAM_STR
        try{
            $query = $connection ->prepare('SELECT * FROM web.usuario WHERE nombre_usuario = :nombre_usuario AND contra = :contra');
            $query -> bindParam(':nombre_usuario',$nombre_usuario,PDO::PARAM_STR);
            $query -> bindParam(':contra',$contra,PDO::PARAM_STR);
            $query -> execute();

            if($query->rowCount()==0){

                exit();
            }

            $usuario;
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $usuario = new Usuario($row["id"],$row["nombre"],$row["nom_usuario"],$row["email"],$row["contra"],$row["fecha_nacimiento"],$row["tipo_usuario"]);
            }
            session_start();

            $_SESSION["id"] = $usuario->getId();
            $_SESSION["nombre_usuario"] = $usuario->getNombreUsuario();
            $_SESSION["tipo_rol"] = $usuario->getTipoRol();

            header("Location: ../index.php");

        }
        catch(PDOException $e){
            error_log("Error de insercion - " . $e, 0);
            echo "Error de insercion" . $e;
            exit();
        }

        }elseif($_POST["_method"]=="DELETE"){
            session_start();
            session_destroy();
            
            header("Location: ../index.php");
        }
    }


?>