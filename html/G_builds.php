<?php
    include("../PHP/conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/G_buildsEstilo.css">
    <link rel="stylesheet" href="../css/cod.css">
    <meta charset="UTF-8">
    <link rel="icon" href="../img/mini_logo.png">
    <title>Guía de builds</title>
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
                        <li><a href="G_characters.php">Personajes</a></li>
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

    <div class="introducción"><!--introducción a las builds estáticas-->
        <h1 class="texto-css">¡Bienvenidos a las builds de personajes!</h1>
        <img class="img_cont" src="../img/portadas2_genshin.jpg">
        <div class="texto_intro"> 
            <p class="texto-css texti-css">
                ¿Buscas maximizar el daño de tu Main DPS o convertir a tu Support en una pieza clave para el Abismo? Has
                llegado al lugar correcto. En Michitactics, entendemos que dominar los elementos es mucho más que
                simplemente lanzar habilidades; es el arte de la optimización y la sinergia.

                Sabemos que el camino del Viajero está lleno de decisiones complejas: ¿Qué set de artefactos priorizar?
                ¿Es mejor Probabilidad de Crítico o Daño Crítico para esta lanza? ¿Cómo aprovechar al máximo las
                Reacciones
                Elementales en el meta actual? Nuestra misión es resolver esas dudas con datos precisos y
                configuraciones
                probadas.

                En Michitactics, creemos que cada personaje tiene el potencial de brillar si se le da el equipo
                adecuado. Ya
                sea que estés explorando los rincones de Natlan o enfrentándote al piso 12 del Abismo Espiral, estamos
                aquí
                para asegurarnos de que tu equipo sea invencible.
            </p>
        </div>
        <div class="build"><!--builds estáticas-->

        </div>
        <footer class="piesite">
            <div class="foot-mensaje">Guide.MichiTactics.com</div>
        </footer>
    </div>
</body>

</html>