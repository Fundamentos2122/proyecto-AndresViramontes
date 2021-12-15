<?php
    session_start();
    if(array_key_exists("nombre_usuario", $_SESSION)){
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
    <title>Login</title>
</head>
<body class="container-fluid container-xl" style="background-color: #191d20;;">
    <div class="container div-primary">
    <nav class="navbar">
        <a href="index.php" class="navbar-brand">Gamer Geek</a>
        <button class="navbar-toggle btn btn-danger" type="button">M</button>

        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="siginup.php" class="nav-link">
                        Sign Up
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row" >
        <div class="col-12">
            <div class="form">
                <form action="./controllers/loginController.php" class="form" method ="POST">
                    <input type="hidden" name="_method" value="POST">
                    <label class="h5" for="nombre_usuario">Nombre de usuario</label>
                    <br>
                    <input type="text" name="nombre_usuario" required>
                     <br>
                     <label class="h5" for="contra">Password</label>
                     <br>
                    <input type="password" name="contra" required >
                    <br><br><br>
                    <input class="submit btn btn-danger" type="submit" value="Login">
                </form>
            </div>
            <div >
                <label for=""style="display: inline;">Si no tienes usurio registrate aqui:</label>
                <a href="siginup.php">Sigin Up</a>
            </div>
        </div>
    </div>

</div>

    <script src="js/framework.js"></script>
</body>
</html>