<?php
    include("../PHP/conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/indexEstilo.css">
    <link rel="stylesheet" href="../css/cod.css">
    <link rel="icon" href="../img/mini_logo.png">
    <meta charset="UTF-8">
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
        <img class="port_img" src="../img/imagen1.png">
    <div class="que_somos" id="que-somos">
        <img src="../img/Somos_michitactics.png">
        <p>
            ¡Bienvenidos a nuestra guía definitiva! Somos una guía integral diseñada para
            brindar todo el conocimiento técnico y práctico de Genshin Impact, y recopilarlo
            en un solo lugar. Aquí encontrarás desde páginas detalladas sobre NPCs, artefactos
            y mobs (tanto hostiles como neutrales) hasta las builds "meta" para cada personaje
            del juego. Sin embargo, eso no es todo. No somos sólo una enciclopedia estática.
            Nuestro valor principal se basa en la interacción del usuario con sus builds.
            A través de nuestro creador de builds y de equipos, te ofrecemos herramientas
            dinámicas para que no necesites seguir guías planas y empieces a diseñar tu propia
            estrategia, así no quieras jugar con el meta. El objetivo es darte el control total
            sobre tu progreso, reduciendo la complejidad del juego, y transformándola en una
            experiencia personalizada, intuitiva y, sobre todo, mucho más amigable.
        </p>
    </div>
    <div class="botones">
        <div class="boton">
            <div class="circulo"><a href="Uid.php"><img src="../img/book-bookmark-solid.png" height="130px"></a></div>
            <a href="Uid.php">
                <p>guia personalizada</p>
            </a>
        </div>
        <div class="boton">
            <div class="circulo"><a href="P_builder_team.php"><img src="../img/teams.svg" height="130px"></a></div>
            <a href="P_builder_team.php">
                <p>Crear equipos</p>
            </a>
        </div>
        <div class="boton">
            <div class="circulo"><a href="Guide.php"><img src="../img/star-solid.png" height="130px"></a></div>
            <a href="Guide.php">
                <p>Guia meta</p>
            </a>
        </div>
    </div>
    <div class="informacion_abrebocas" id="informacion_abrebocas-nav">
        <!--vamos a manejar varios contenedores, dentro de un contenedor para clasificar la misma información-->
        <div class="que_es">
            <h3 class="texto-css">¿Qué es Genshin Impact?</h3>
            <img class="img_cont" src="../img/portadas4_genshin.jpg">
            <p class="texto-css texti-css">
                Es un Action RPG de mundo abierto desarrollado por HoYoverse (antes miHoYo).
                Es Free-to-Play, lo que significa que puedes jugarlo gratis de principio a fin,
                aunque tiene un sistema de "Gachapón" (lotería) para obtener personajes y armas especiales.
            </p>
        </div>
        <div>
            <h3 class="texto-css">La Premisa de la Historia</h3>
            <p class="texto-css texti-css">
                Eres el/la Viajero/a, un ser de otro mundo que buscaba viajar por las estrellas
                con su hermano/a hasta que una "Diosa Desconocida" los separa y te quita tus poderes.
                Despiertas en Teyvat y, junto a tu guía Paimon (la mejor comida de emergencia del mundo),
                debes visitar las siete naciones para encontrar a tu familiar perdido.
            </p>
            <table class="teyvat_tabla" id="teyvat_tabla-nav">
                <!--la tabla mostrará los 7 elementos del juego, la nación, la inspiración, y el arconte o Dios-->
                <tr>
                    <th>Elemento</th>
                    <th>Nación</th>
                    <th>Inspiración Real</th>
                    <th>Arconte o Dios</th>
                </tr>
                <tr>
                    <td>Anemo (Viento)</td>
                    <td>Mondstadt</td>
                    <td>Alemania Medieval</td>
                    <td>Barbatos (Venti)</td>
                </tr>
                <tr>
                    <td>Geo (Tierra)</td>
                    <td>Liyue</td>
                    <td>China Tradicional</td>
                    <td>Morax (Zhongli)</td>
                </tr>
                <tr>
                    <td>Electro (Rayo)</td>
                    <td>Inazuma</td>
                    <td>Japón Shogunato</td>
                    <td>Baal (Raiden Shogun)</td>
                </tr>
                <tr>
                    <td>Dendro (Naturaleza)</td>
                    <td>Sumeru</td>
                    <td>Medio Oriente/India</td>
                    <td>Buer (Nahida)</td>
                </tr>
                <tr>
                    <td>Hydro (Agua)</td>
                    <td>Fontaine</td>
                    <td>Francia/Inglaterra</td>
                    <td>Focalors (Furina)</td>
                </tr>
                <tr>
                    <td>Pyro (Fuego)</td>
                    <td>Natlan</td>
                    <td>América Precolombina/África</td>
                    <td>Haborym (Mavuika)</td>
                </tr>
                <tr>
                    <td>Cryo (Hielo)</td>
                    <td>Snezhnaya</td>
                    <td>Rusia/Europa del Este</td>
                    <td>La Zarina</td>
                </tr>
            </table>
        </div>
        <div id="datos-nav">
            <ul class="consejos_para_principiantes" id="consejos_para_principiantes-nav">
                <!--vamos a hacer que cuando el mouse pase por el titulo, se despliegue la información acerca de genshin-->
                <li class="titulo_consejosprin texto-css">
                    <h3>Datos Importantes para Principiantes</h3>
                </li>
                <ul>
                    <li class="consejo1 texto-css texti-css">
                        <b>El Sistema de Combate:</b>
                        No se trata solo de pegar fuerte. La clave son las Reacciones Elementales.
                        Por ejemplo, si mojas a un enemigo (Hydro) y luego le lanzas un rayo (Electro),
                        crearás Electrocargado, que hace daño continuo.
                    </li>
                    <li class="consejo2 texto-css texti-css">
                        <b>Rango de Aventura (AR):</b>
                        Es tu nivel de cuenta.
                        A medida que subes el AR, desbloqueas nuevas funciones,
                        misiones y el "Nivel de Mundo"
                        (que hace a los enemigos más difíciles pero con mejores recompensas).
                    </li>
                    <li class="consejo3 texto-css texti-css">
                        <b>La Resina Original:</b>
                        Es el sistema de "energía".
                        La usas para reclamar recompensas de jefes y mazmorras.
                        Se recarga sola con el tiempo, ¡así que no la dejes siempre llena!
                    </li>
                    <li class="consejo4 texto-css texti-css">
                        <b>Gachapón y Deseos:</b>
                        Usas una moneda llamada Protogemas para comprar "Deseos".
                        Cada 90 deseos tienes garantizado un personaje de 5 estrellas .
                    </li>
                </ul>
            </ul>
            <ul class="importancia_genshin" id="importancia_genshin-nav">
                <!--lo mismo con el por qué es tan famoso, que despliegue la información, para que no se sobrecargue-->
                <li class="titulo_popularidad texto-css">
                    <h3>¿Por qué es tan famoso?</h3>
                </li>
                <ul>
                    <li class="importante1 texto-css texti-css">
                        <b>Gráficos: </b>
                        Estilo anime de altísima calidad que corre desde un celular hasta una PS5.
                    </li>
                    <li class="importante2 texto-css texti-css">
                        <b>Música: </b>
                        Banda sonora orquestal grabada por las mejores filarmónicas del mundo.
                    </li>
                    <li class="importante3 texto-css texti-css">
                        <b>Lore: </b>
                        La historia es mucho más oscura y profunda de lo que parece a simple vista.
                        Hay teorías de conspiración, dioses caídos y civilizaciones destruidas en cada rincón.
                    </li>
                </ul>
            </ul>
        </div>
    </div>
    <footer class="piesite">
        <div class="foot-mensaje">Guide.MichiTactics.com</div>
    </footer>
</body>

</html>