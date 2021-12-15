<?php
    session_start();
    if(!array_key_exists("nombre_usuario", $_SESSION)){
        header("Location: http://localhost/Proyecto/index.php");
        exit();
    }

    if($_SESSION["tipo_rol"] === "Admin"){
        header("Location: http://localhost/Proyecto/index.php");
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
    <title>Agregar Juego</title>
</head>
<body class="container-fluid container-xl" style="background-color: #191d20;;">
<div class="container div-primary">
    <nav class="navbar">
        <a href="index.php" class="navbar-brand">Gamer Geek</a>
        <button class="navbar-toggle btn btn-danger" type="button">|||</button>

        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="./controllers/loginController.php" method = "POST" class="nav-item">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value = "LogOut" class="nav-link dropdown-toggle btn" style="background-color: transparent; border: none; max-width: max-content;">
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-sm-1 col-lg-2"></div>
        <div class="col-sm-10 col-lg-8">
            <div class="form">
                <form action="./controllers/gameController.php" class="form" method ="POST">
                    <input type="hidden" name="_method" value="POST">
                    <label class="h5" for="nombre_game">Nombre de juego</label>
                    <br>
                    <input type="text" name="nombre_game" required>
                     <br>
                     <label class="h5" for="fecha_publicacion">Fecha de publicacion</label>
                     <br>
                    <input type="date" name="fecha_publicacion" required >
                    <br>
                     <label class="h5" for="desarrolladora">Desarrolladora</label>
                     <br>
                    <input type="text" name="desarrolladora" required >
                    <br>
                     <label class="h5" for="sinopsis">Sinopsis</label>
                     <br>
                    <textarea name="sinopsis" id="" cols="50" rows="10"required></textarea>
                    <br><br>
                    <label class="h6" for="portada">Añadir portada</label>
                    <br>
                    <input type="image" name="portada" required>
                    <br><br><br>
                    <input class="submit btn btn-info" type="submit" value="Guardar"style="margin-left: 75%;">
                </form>
            </div>
        </div>
        <div class="col-sm-1 col-lg-2"></div>
    </div>
</div>
    <script src="js/framework.js"></script>
</body>
</html>