<?php

include("../models/DB.php");
include("../models/GameDB.php");


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
            //Guardar
            
            $nombre_game = $_POST["nombre_game"];
            $desarrolladora= $_POST["desarrolladora"];
            $fecha_publicacion = $_POST["fecha_publicacion"];
            $sinopsis = $_POST["sinopsis"];
            $portada = "";
    
            if(sizeof($_FILES) > 0){
                $tmp_name = $_FILES["portada"]["tmp_name"];
                $foto = file_get_contents($tmp_name);
            }
    
            try{
                $query = $connection->prepare('INSERT INTO game VALUES (NULL,:nombre_game, :desarrolladora, :sinopsis, :portada ,:fecha_publicacion)');
                $query->bindParam(':nombre_game',$nombre_game, PDO::PARAM_STR);
                $query->bindParam(':desarrolladora',$desarrolladora, PDO::PARAM_STR);
                $query->bindParam(':sinopsis',$sinopsis, PDO::PARAM_STR);
                $query->bindParam(':portada',$foto, PDO::PARAM_STR);
                $query->bindParam('::fecha_publicacion',$fecha_publicacion, PDO::PARAM_STR);
                
                $query->execute();
    
                if($query->rowCount()==0){
                    //Error
                    exit();
                }
    
                header("Location: http://localhost/Proyecto/index.php");
    
            }
            catch(PDOException){
                error_log("Error de insercion - " . $e, 0);
                echo "Error de insercion" . $e;
                exit();
            }
        }elseif($_POST["_method"]=="PUT"){
            //Actualizar
    
        }elseif($_POST["_method"]=="DELETE"){
            //Eliminar
    
        }
    }

?>