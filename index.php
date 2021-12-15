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
    <title>Inicio</title>
</head>
<body class="container-fluid container-xl" style="background-color: #191d20;">
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
        <div class="col-12"style ="height: 200px;">
            <img src="utilities/banner.jpg" alt="" class="img-banner">
        </div>
        <div class="col-12 col-lg-12">
            <div class="container-fluid" style="margin-top: 1em;">
                <h3 class="h3 text-title">Juegos de accion </h3>
                <div class="responsive">
                <div class="gallery">
                    <a  href="game.php">
                    <img src="https://picsum.photos/200" alt="Cinque Terre" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
                </div>
          
          
                <div class="responsive">
                    <div class="gallery">
                        <a  href="game.php">
                        <img src="https://picsum.photos/300" alt="Forest" width="600" height="400">
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>
                </div>
          
                <div class="responsive">
                    <div class="gallery">
                        <a  href="game.php">
                        <img src="https://picsum.photos/400" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>
                </div>
          
                <div class="responsive">
                    <div class="gallery">
                        <a  href="game.php">
                        <img src="https://picsum.photos/500" alt="Mountains" width="600" height="400">
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>
                </div>
            <div class="clearfix"></div>
        </div>
          </div>
        <div class="col-12 col-lg-12">
            <div class="container-fluid" style="margin-top: 1em;">
                <h3 class="h3 text-title">Juegos de aventura </h3>
                <div class="responsive">
                <div class="gallery">
                    <a href="game.php">
                    <img src="https://picsum.photos/200" alt="Cinque Terre" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
                </div>
          
          
                <div class="responsive">
                    <div class="gallery">
                        <a  href="game.php">
                        <img src="https://picsum.photos/300" alt="Forest" width="600" height="400">
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>
                </div>
          
                <div class="responsive">
                    <div class="gallery">
                        <a  href="game.php">
                        <img src="https://picsum.photos/400" alt="Northern Lights" width="600" height="400">
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>
                </div>
          
                <div class="responsive">
                    <div class="gallery">
                        <a  href="game.php">
                        <img src="https://picsum.photos/500" alt="Mountains" width="600" height="400">
                        </a>
                        <div class="desc">Add a description of the image here</div>
                    </div>
                </div>
            <div class="clearfix"></div>
        </div>
        </div>
     </div>
    </div>



    <script src="js/framework.js"></script>
</body>
</html>