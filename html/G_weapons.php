<?php
    include("../PHP/conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/G_weaponsEstilo.css">
    <link rel="stylesheet" href="../css/cod.css">
    <meta charset="UTF-8">
    <title>Guía de armas</title>
    <link rel="icon" href="../img/mini_logo.png">
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
    <div class="grid-composicion">
        <aside class="contenido">
            <ul>
                <li class="texto-css indice-li">
                    <a href="#info-principal-nav">Introducción</a>
                </li>
                <li class="texto-css indice-li">
                    <a href="#tabla_de_datos">Selección de armas</a>
                </li>
                <li class="texto-css indice-li">
                    <a href="#tipos-armas-nav">Tipos de armas</a>
                </li>
                <ul>
                    <li class="texto-css indice-li">
                        <a href="#glosario_armas-nav">Datos de armas</a>
                    </li>
                    <li class="texto-css indice-li">
                        <a href="#estadistica-nav">Estadísticas de las armas</a>
                    </li>
                    <li class="texto-css indice-li">
                        <a href="#metodo-armas-nav">Metodos</a>
                    </li>
                </ul>
            </ul>
        </aside>

        <main class="contenido-principal">
            <h2 class="texto-css" id="info-principal-nav">Armas</h2>
            <div>
                <img class="img_cont" src="../img/weapon_port_prin.jpg">
            </div>
            <div id="introduction_armas"><!--pequeña introducción a el sistema de armas de genshin impact-->
                <p class="texto-css texti-css">
                    El arma es mucho más que un simple instrumento de daño; es el núcleo que define la eficiencia de tu
                    build.
                    El sistema se divide en cinco categorías principales: Espadas ligeras, Mandobles, Lanzas, Arcos y
                    Catalizadores.
                    Cada pieza de equipo cuenta con un Ataque Básico y una Estadística Secundaria (como Probabilidad de
                    Crítico,
                    Maestría Elemental o Recarga de Energía) que debe entrar en armonía con el rol de tu personaje.
                    Además, las armas poseen habilidades pasivas únicas que pueden potenciarse mediante el refinamiento.
                    Ya sea ascendiendo su nivel con materiales de mundo o buscando la sinergia perfecta entre sus
                    efectos y
                    las
                    habilidades elementales,
                    elegir el arma correcta es lo que separa a un viajero común de una verdadera leyenda de Teyvat.
                </p>
            </div>
            <div id="tabla_de_datos"><!--tabla interactiva de-->
                <table>
                    <tr>
                        <th>nombre </th>
                        <th>imagen </th>
                        <th>El Ataque Básico (Base ATK)</th>
                        <th>El Stat Secundario (Sub-stat)</th>
                        <th>Pasiva y el Rango de Refinamiento</th>
                        <th>Efectos</th>
                    </tr>
                </table>
            </div>
            <div id="armas">
                <ul>
                    <li id="tipos-armas-nav">
                        <h3 class="texto-css">Tipos de armas</h3>
                        <img class="img_cont" src="../img/weapons_tipes.jpg">
                    </li>
                    <ul>
                        <li class="texto-css texti-css">
                            En el mundo de Teyvat, la fuerza de un viajero no solo reside en su dominio de los
                            elementos,
                            sino
                            en el acero, la madera o la magia que sostiene en sus manos. Desde las veloces estocadas de
                            una
                            espada ligera hasta el poder devastador de un mandoble, cada arma cuenta una historia de
                            conquista y
                            supervivencia. Elegir la herramienta adecuada es el primer paso para dominar el destino.
                        </li>
                    </ul>
                </ul>
                <h3 class="texto-css">
                    Espada ligera
                </h3>
                <img class="img_cont" src="../img/weapons_sword.png">
                <div class="texto-css texti-css">
                    Es el arma más versátil. Permite encadenar ataques rápidos y tener una movilidad alta para esquivar.
                    Ideal para personajes que alternan entre daño físico y habilidades elementales de corto alcance.
                </div>
                <h3 class="texto-css">
                    Mandoble
                </h3>
                <img class="img_cont" src="../img/weapons_greatsword.png">
                <div class="texto-css texti-css">
                    Sacrifica velocidad por fuerza bruta. Sus ataques pueden interrumpir a los enemigos y son los 
                    más efectivos para romper escudos de Geo o recolectar minerales en el mundo abierto.
                </div>
                <h3 class="texto-css">
                    Lanza
                </h3>
                <img class="img_cont" src="../img/weapons_javaline.png">
                <div class="texto-css texti-css">
                    Ofrece los ataques normales más rápidos del juego. Su alcance es superior al de la espada ligera, 
                    permitiendo mantener una pequeña distancia mientras se asestan golpes precisos y ráfagas constantes.
                </div>
                <h3 class="texto-css">
                    Arco
                </h3>
                <img class="img_cont" src="../img/weapons_bow.png">
                <div class="texto-css texti-css">
                    Permite atacar desde lejos. Su mayor ventaja es el Ataque Cargado, que imbuye la flecha 
                    con el elemento del personaje y permite golpear puntos débiles de los enemigos para inmovilizarlos.
                </div>
                <h3 class="texto-css">
                    Catalizador
                </h3>
                <img class="img_cont" src="../img/weapons_grimoire.png">
                <div class="armas">
                    <p class="texto-css texti-css">
                        A diferencia de las demás, todos los ataques (normales y cargados) de un catalizador infligen 
                        daño elemental puro. Son fundamentales para crear reacciones constantes sin depender únicamente de las habilidades.
                    </p>
                </div>
                <h3 class="estadistica texto-css" id="estadistica-nav">Estadísticas de las armas</h3>
                <p class="texto-css texti-css">Cada arma posee tres componentes estadísticos:</p>
                <img class="img_cont" src="../img/weapons_est.jpg">
                <ul>
                    <li class="texto-css texti-css">
                        <h3>Ataque Básico:</h3>
                        Es el valor principal que se suma
                        al ataque base del personaje.
                    </li>
                    <li class="estadistica_addon texto-css texti-css"><!--acá se informará al usuario de mayor información, 
                            que se desplegará hacia la derecha, pero para eso tendrá que clickearlo-->
                        <h3>Estadística Secundaria:</h3>
                        Un bono que escala junto al nivel
                        del arma.
                    </li>
                    <ul>
                        <li class="texto-css texti-css">
                            <h3>ATK / DEF / HP %:</h3>Aumenta un porcentaje del stat base.
                        </li>
                        <li class="texto-css texti-css">
                            <h3>Maestría Elemental:</h3>Potencia el daño de las reacciones,
                            o los distintos tipos de daño elemental.
                        </li>
                        <li class="texto-css texti-css">
                            <h3>Recarga de Energía:</h3>Ayuda a cargar la definitiva más rápido.
                        </li>
                        <li class="texto-css texti-css">
                            <h3>Probabilidad Crítica:</h3>Porcentaje que tiene un arma de inflingir daño aumentado.
                        </li>
                        <li class="texto-css texti-css">
                            <h3>Daño Crítico:</h3>Multiplicador que afecta al daño base del arma.
                        </li>
                        <li class="texto-css texti-css">
                            <h3>Bono de Daño Físico:</h3>Aumenta el daño de los golpes no elementales.
                        </li>
                    </ul>
                </ul><br>

                <li class="metodo_armas texto-css texti-css" id="metodo-armas-nav">Existen metodos para que un arma
                    alcance su máximopotencial, son tres procesos distintos:
                </li>
                <img class="img_cont" src="../img/weapon_level.jpg">
                <ul>
                    <li class="texto-css">
                        <h3>Fortalecimiento:</h3>
                    </li>
                    <ul>
                        <li class="texto-css texti-css">
                            Qué hace:Aumenta el Ataque Básico y la
                            Estadística Secundaria.
                        </li>
                        <li class="texto-css texti-css">
                            Cómo se hace:Consumiendo Mineral de refinamiento o
                            usando otras armas de menor rareza como "comida".
                        </li>
                        <li class="texto-css texti-css">
                            Límite:El nivel máximo es 90.
                        </li>
                    </ul>
                    <li class="texto-css">
                        <h3>Ascensión:</h3>
                    </li>
                    <ul>
                        <li class="texto-css texti-css">
                            Qué hace:Permite que el arma siga subiendo de nivel
                            una vez llega a un tope (cada 10-20 niveles).
                        </li>
                        <li class="texto-css texti-css">
                            Cómo se hace: Necesitas materiales específicos que
                            se obtienen en Dominios (en días específicos de la semana),
                            además de materiales soltados por enemigos comunes y
                            élites en el mundo abierto.
                        </li>
                    </ul>
                    <li class="texto-css">
                        <h3>Refinamiento:</h3>
                    </li>    
                    <ul>
                        <li class="texto-css texti-css">
                            Qué hace:Potencia exclusivamente los números de
                            la Habilidad Pasiva
                        </li>
                        <li class="texto-css texti-css">
                            Cómo se hace:Debes "sacrificar" una copia exacta del
                            arma.
                        </li>
                        <li class="texto-css texti-css">
                            Rango:Se puede refinar hasta el nivel 5 (R5).
                        </li>
                    </ul>
                    </li>
                </ul>
            </div>
        </main>
    </div>

    <footer class="piesite">
        <div class="foot-mensaje">Guide.MichiTactics.com</div>
    </footer>
</body>

</html>