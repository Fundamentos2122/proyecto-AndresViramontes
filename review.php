<?php
    session_start();
    if(!array_key_exists("nombre_usuario", $_SESSION)){

        header("Location: http://localhost/Proyecto/login.php");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/framework.css">
    <title>Reseñas</title>
</head>
<body class="container-fluid container-xl" style="background-color: #191d20;;">
<div class="container div-primary">
    <nav class="navbar">
        <a href="index.php" class="navbar-brand">Gamer Geek</a>
        <button class="navbar-toggle btn btn-danger" type="button">|||</button>

        <div class="navbar-collapse">
            <ul class="navbar-nav">
            <?php 
                include("./utilities/controles1.php");
                ?>

                <?php
                  include("./utilities/controles2.php");
                ?>
            </ul>
        </div>
    </nav>
    <div class="row" >
        <div class="col-2 col-lg-2"></div>
        <div class="col-8 col-lg-8">
            <div>
                <h3 class="h3">Nombre del juego</h3>
                <form class="form2">
                    <label class="h5" for="ratio">Calificacion</label>
                    <br>
                    <input type="number" name="ratio" required min="1" max="5">
                     <br>
                     <label class="h5" for="review">Escribe tu reseña</label>
                     <br>
                    <textarea name="review" id="" cols="30" rows="10" style="resize: none;"></textarea>
                    <br><br><br>
                    <input class="submit btn btn-danger" type="submit" value="Subir reseña"style="margin-left: 75%;">
                </form>
            </div>
        </div>
        <div class="col-2 col-lg-2"></div>
    </div>
</div>
    
</body>
</html>