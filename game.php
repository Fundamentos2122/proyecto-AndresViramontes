<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/framework.css">
    <title>Juego</title>
</head>
<body class="container-fluid container-xl" style="background-color: #191d20;;">
<div class="container div-primary">
        <nav class="navbar">
            <a href="index.php" class="navbar-brand">Gamer Geek</a>
            <button class="navbar-toggle btn btn-danger" type="button">|||</button>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item" style="align-self: center">
                        <label for="search" class="h6" style="color: antiquewhite;"> Busqueda</label>
                        <input type="search" name="search" style="border-radius: 5%;">
                    </li>
                    <?php 
                include("./utilities/controles1.php");
                ?>

                <?php
                  include("./utilities/controles2.php");
                ?>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                <div class="info">
                    <img src="https://picsum.photos/200" alt="" class="img-fluid">
                    <ul class="list-info">
                        <li>
                            <h5 class="h5">Nombre del juego</h5>
                    
                        </li>
                        <li>
                            <h5 class="h5">Fecha de publicacion</h5>
                        </li>
                        <li>
                            <h5 class="h5">Desarrolladora</h5>
                        </li>
                    </ul>
                    
                </div>
                <div class="info-2 conntainer-md border-top">
                    <h5 class="h5">Sinopsis</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maxime, voluptatem nisi fugit dignissimos eius, temporibus at quae magnam sint voluptatum aperiam sed dolor molestias culpa praesentium? Ab, dolorem eum.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat esse ducimus vitae itaque voluptas numquam fugiat dolor distinctio. Perferendis inventore, magni mollitia et nostrum dicta? Quasi natus fugiat tenetur deleniti?
                    </p>
                    <a href="review.php" class="btn btn-secondary" style="display: flex; align-self: flex-end;">Agregar reseña</a>
                </div>
                <div class="info-2 conntainer-md border-top">
                    <h5 class="h5">Reseñas</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maxime, voluptatem nisi fugit dignissimos eius, temporibus at quae magnam sint voluptatum aperiam sed dolor molestias culpa praesentium? Ab, dolorem eum.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat esse ducimus vitae itaque voluptas numquam fugiat dolor distinctio. Perferendis inventore, magni mollitia et nostrum dicta? Quasi natus fugiat tenetur deleniti?
                    </p>
                    <?php include("./utilities/eliminaRe.php");?>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="js/framework.js"></script>
</body>
</html>