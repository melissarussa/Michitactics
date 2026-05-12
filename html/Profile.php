<?php
    include("../PHP/conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/ProfileEstilo.css">
    <link rel="stylesheet" href="../css/cod.css">
    <meta charset="UTF-8">
    <title>Perfil de usuario</title>
    <link rel="icon" href="../img/mini_logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
     <header class="menu">
        <div class="logo">
            <a href="index.php">
                <img src="../img/logo.png" width="120px">
            </a>
        </div>
        <div>
            <ul class="menu">
                <li class="head-list"><a href="Guide.php">Guia meta</a>
                    <ul>
                        <li><a href="G_weapons.php">Armas</a></li>
                        <li><a href="G_artifacts.php">Artefactos</a></li>
                        <li><a href="G_characters.php">Personajes</a></l>
                        <li><a href="G_mobs.php">Mobs hostiles</a></li>
                        <li><a href="G_mobs_nohostiles.php">Mobs no hostiles</a></li>
                        <li><a href="G_builds.php">builds</a></li>
                    </ul>
                </li>
                <li class="head-list">
                    <a href="P_builder.php">Guia personalizada</a><!--guia personalizada, o creador de builds-->
                    <ul>
                        <li><a href="P_builder_team.php">Crear equipos</a></li>
                    </ul>
                </li>
                <li class="nav_bot">
                    <a href="Login.php">Login</a>
                </li>
                <li class="nav_bot">
                    <a href="Sign_up.php">Sign up</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="perfil-persona">
        <div class="nombre-foto"> </div>
        <div class="listado-de-builds">
            <div></div>
            <div></div>
        </div> 
    </div>
    <footer class="piesite">
        <div class="foot-mensaje">Guide.MichiTactics.com</div>
    </footer>
</body>

</html>