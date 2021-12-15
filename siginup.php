<?php
    session_start();
    if(array_key_exists("nombre_usuario", $_SESSION){
        header("Location: http://localhost/Proyecto/index.php");
        exit();
    })
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/framework.css">
    <title>Sing Up</title>
</head>
<body class="container-fluid container-xl" style="background-color: #191d20;;">
    <nav class="navbar">
        <a href="index.html" class="navbar-brand">Gamer Geek</a>
        <button class="navbar-toggle btn btn-danger" type="button">|||</button>

        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="login.html" class="nav-link">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row" >
        <div class="col-2 col-lg-4"></div>
        <div class="col-8 col-lg-4">
            <div class="form">
                <form class="form">
                <label class="h5" for="nombre">Nombre</label>
                    <br>
                    <input type="text" name="nombre" required>
                     <br>
                    <label class="h5" for="nombre_usuario">Nombre de usuario</label>
                    <br>
                    <input type="text" name="Nombre usuario" required>
                     <br>
                     <label class="h5" for="contra">Password</label>
                     <br>
                    <input type="password" name="contra" required >
                    <br>
                     <label class="h5" for="email">Email</label>
                     <br>
                    <input type="email" name="email" required >
                    <br>
                     <label class="h5" for="nacimiento">Fecha de nacimiento</label>
                     <br>
                    <input type="date" name="nacimiento" required >
                    <br><br>
                    <label class="h6" for="admin">Codigo de administrador (Opcional)</label>
                    <br>
                    <input type="text" name="admin">
                    <br><br><br>
                    <input class="submit btn btn-danger" type="submit" value="Login"style="margin-left: 75%;">
                </form>
            </div>
            <div>
                <label for=""style="display: inline;">Ya tienes un usuario entra aqui:</label>
                <a href="siginup.html">Login</a>
            </div>
        </div>
        <div class="col-2 col-lg-4"></div>
    </div>
    <script src="js/framework.js"></script>  
</body>
</html>