<?php
    include("../PHP/conexion.php");
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/cod.css">
    <link rel="stylesheet" href="../css/G_artifactsEstilo.css">
    <link rel="icon" href="../img/mini_logo.png">
    <meta charset="UTF-8">
    <title>Guía de artefactos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
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

    <div class="grid-composicion">
        <aside class="contenido">
            <ul>
                <li class="texto-css indice-li">
                    <a href="#artefactos-nav">Introducción</a>
                </li>
                <li class="texto-css indice-li">
                    <a href="#sets-nav">Sets</a>
                </li>
            </ul>
        </aside>
        <main class="contenido-principal">
            <div>
                <h2 class="texto-css" id="artefactos-nav">Artefactos</h2>
                <img class="img_cont" src="../img/artefact_pori_prin.jpg">
            </div>
            <p class="texto-css texti-css">
                ¿No sabes qué piezas equipar o te pierdes entre tantos números?
                Aquí te ayudamos a entender la lógica detrás de los artefactos.
                Te mostramos los mejores sets para cada rol (Daño, Soporte o Curación),
                dónde farmearlos eficientemente y cómo equipar a tus personajes para que
                cada punto de resina invertido cuente. ¡Haz que la suerte del buscador
                esté de tu lado!
            </p>
            <div class="contenido-estilo-css tabla">
                <table class="texto-css">
                    <tr>
                        <th>set</th>
                        <th>bonos</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <div class="obj-info contenido-estilo-css">
                <img class="img_cont" src="../img/artefact_types.jpg">
                <ul>
                    <li class="texto-css">
                        <h3 id="sets-nav">Sets</h3>
                    </li>
                    <ul>
                        <li class="texto-css texti-css">
                            <h3>Flor de la Vida:</h3>
                            <p class="texti-css">Siempre da Vida (HP) plana.</p>
                        </li>
                        <li class="texto-css">
                            <h3>Pluma de la Muerte:</h3>
                            <p class="texti-css">Siempre da Ataque (ATK) plano.</p>
                        </li>
                        <li class="texto-css">
                            <h3>Reloj del Destino:</h3>
                            <p class="texti-css">Puede variar (ATK%, DEF%, HP%, Maestría o Recarga).</p>
                        </li>
                        <li class="texto-css">
                            <h3>Cáliz de Eonothem:</h3>
                            <p class="texti-css">El más difícil, porque puede dar Bonos de Daño Elemental (Pyro, Hydro,
                                etc.).</p>
                        </li>
                        <li class="texto-css">
                            <h3>Tiara/Corona de Logos:</h3>
                            <p class="texti-css">Única pieza que puede dar Probabilidad o Daño CRIT.</p>
                        </li>
                    </ul>
                </ul>
            </div>
        </main>
    </div>

    <footer class="piesite">
        <div class="foot-mensaje">Guide.MichiTactics.com</div>
    </footer>
</body>

</html>