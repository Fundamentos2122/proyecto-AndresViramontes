<?php

if(array_key_exists("nombre_usuario", $_SESSION)){
    if($_SESSION["tipo_rol"] !== "Normal"){
    echo 
        '<li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle">
                 Admin
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="addGame.php" class="dropdown-item">Agregar juego</a>
                </li>
            </ul>
        </li>';

    }
}

?>