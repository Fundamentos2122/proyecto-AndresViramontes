<?php
if(!array_key_exists("nombre_usuario", $_SESSION)){
    echo
        '<li class="nav-item">
            <a href="login.php" class="nav-link">
                Login
            </a>
        </li>';
}else{
    echo
        '<li class="nav-item">
            <form action="./controllers/loginController.php" method = "POST" class="nav-item">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value = "LogOut" class="nav-link dropdown-toggle btn" style="background-color: transparent; border: none; max-width: max-content;">
            </form>
        </li>';
}

?>