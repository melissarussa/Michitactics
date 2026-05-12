<?php
    include("../PHP/conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Guía de entidades pacíficas</title>
    <link rel="icon" href="../img/mini_logo.png">
    <link rel="stylesheet" href="../css/cod.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/G_mobs_nohostiles.css">
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
    <div class="grid-composicion">
        <aside class="contenido">
            <ul>
                <li class="texto-css indice-li">
                    <a href="#info-principal-nav">Introducción</a>
                </li>
                <li class="texto-css indice-li">
                    <a href="#animales-nav">Los animales</a>
                </li>
                <li class="texto-css indice-li">
                    <a href="#npcs-nav">Los NPCs</a>

                <li class="texto-css indice-li">
                    <a href="#container-npcs-nav">Selección de NPCs</a>
                </li>
                <li class="texto-css indice-li">
                    <a href="#consejos-datos-nav">Consejos</a>
                </li>
            </ul>
        </aside>

        <main class="contenido-principal">
            <h2 class="texto-css" id="info-principal-nav">NPCs y Mobs No Hostiles</h2>
            <div class="info-principal-npcs">
                <img class="img_cont" src="../img/characters_port.jpg">
                <p class="texto-css texti-css">
                    Esta sección constituye un compendio detallado de los Personajes
                    No Jugables (NPCs) y las criaturas no hostiles que pueblan el
                    continente de Teyvat. Aquí podrás explorar información sobre ciudadanos
                    clave en la historia, vendedores con inventarios únicos y la biodiversidad
                    animal que no representa una amenaza para el viajero, pero que es esencial
                    para el equilibrio y la recolección de materiales en el mundo de Genshin Impact.
                </p>
            </div>
            <div class="animales">
                <h3 class="texto-css" id="animales-nav">Los Animales</h3>
                <img class="img_cont" src="../img/mobs_no_post.jpg">
                <p class="texto-css texti-css">
                    Estos son los que ves correteando por el campo. No te harán daño, pero son tu
                    principal fuente de comida y recursos para cocinar.
                </p>
                </p>
                <h3 class="texto-css">Aves</h3>
                <p class="texto-css texti-css">
                    <img class="img_cont" src="../img/aves_mobs_no3.jpg"><br>
                    Son la fuente principal de Carne de Ave.
                    ¡Pero ten cuidado! Si corres hacia ellas, saldrán volando.
                    Si quieres cazarlas, lo mejor es usar un arco desde lejos.
                </p>
                <h3 class="texto-css">Bestias de tierra</h3>
                <p class="texto-css texti-css">
                    <img class="img_cont" src="../img/bestias_mobs_no2.jpg"><br>
                    Los jabalíes te dan Carne Cruda.
                    Aunque son pacíficos, a veces el jabalí puede embestirte si te pones
                    en su camino mientras huye (¡pero no quita casi vida!).
                </p>
                <h3 class="texto-css">Peces y cangrejos</h3>
                <p class="texto-css texti-css">
                    Los verás en las orillas. Los cangrejos son rápidos, así que tendrás
                    que correr y pulsar el botón de recoger antes de que se entierren en la arena.
                </p>
                <h3 class="texto-css">Criaturas de cristal</h3>
                <p class="texto-css texti-css">
                    Son como mariposas brillantes. Estas son súper
                    importantes porque al atraparlas te dan "Núcleos de Cristal", que sirven para
                    fabricar resina condensada más adelante. ¡Atrápalas siempre que las veas!
                </p>
                <h3 class="texto-css" id="npcs-nav">Los NPCs</h3>
                <p class="texto-css texti-css">
                    <img class="img_cont" src="../img/npcs_post.jpg">
                    En las ciudades como Mondstadt o Liyue verás a muchas personas con las que puedes hablar.
                    ¡Lo mejor de todo es que estos npcs no buscarán embestirte o hacerte daño! Sin embargo no todos
                    hacen lo
                    mismo:
                </p>
                <h3 class="texto-css">Los ayudantes:</h3>
                <img class="img_cont" src="../img/ayudantes_consejos_mobs_no1.jpg">
                <p class="texto-css texti-css">
                    Katheryne: Está en el Gremio de Aventureros. Ella te da tus recompensas por subir
                    de nivel y tus misiones diarias.
                </p>
                <p class="texto-css texti-css">
                    El herrero: Te ayuda a crear armas y a romper minerales.
                </p>
                <h3 class="texto-css">Los comerciantes :</h3>
                <p class="texto-css texti-css">
                    <img class="img_cont" src="../img/ayudantes_consejos_mobs1.jpg">
                    Tienen un icono de una bolsita sobre la cabeza. Te venden
                    desde comida hasta flores raras que sirven para mejorar a tus personajes.
                </p>
                <h3 class="texto-css">Los que tienen regalos ocultos:</h3>
                <p class="texto-css texti-css">
                    ¡Este es un truco de novato! Algunos NPCs, después de hablar
                    con ellos un par de veces y elegir las opciones de diálogo correctas, te regalan cosas: comida,
                    libros o incluso armas sencillas. ¡Habla con todos y explora sus regalos!
                </p>
                <h3 class="texto-css">Los de relleno:</h3>
                <p class="texto-css texti-css">
                    Simplemente están ahí para que el mundo se sienta vivo. Te contarán
                    historias sobre la ciudad o sus problemas, pero no tienen una función mecánica.
                </p>
            </div>
            <div class="container" id="container-npcs-nav">
                <div class="filtro">
                    <div class="columna">
                        <ul>
                            <li class="texto-css">Elemento</li>
                            <ul>
                                <li class="texto-css"><input type="checkbox" name="elemento" id="Pyro"><img
                                        src="../img/pyro.png" height="40px">Pyro</li>
                                <li class="texto-css"><input type="checkbox" name="elemento" id="Hydro"><img
                                        src="../img/hydro.png" height="40px">Hydro</li>
                                <li class="texto-css"><input type="checkbox" name="elemento" id="Anemo"><img
                                        src="../img/anemo.png" height="40px">Anemo</li>
                                <li class="texto-css"><input type="checkbox" name="elemento" id="Electro"><img
                                        src="../img/electro.png" height="40px">Electro</li>
                                <li class="texto-css"><input type="checkbox" name="elemento" id="Cryo"><img
                                        src="../img/cryo.png" height="40px">Cryo</li>
                                <li class="texto-css"><input type="checkbox" name="elemento" id="Geo"><img
                                        src="../img/geo.png" height="40px">Geo</li>
                                <li class="texto-css"><input type="checkbox" name="elemento" id="Dendro"><img
                                        src="../img/dendro.png" height="40px">Dendro</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="columna">
                        <ul>
                            <li class="texto-css">Nación</li>
                            <ul>
                                <li class="texto-css"><input type="checkbox" name="nacion" id="Mondstadt"><img
                                        src="../img/mondstadt.png" height="40px">Mondstadt</li>
                                <li class="texto-css"><input type="checkbox" name="nacion" id="Liyue"><img
                                        src="../img/liyue.png" height="40px">Liyue</li>
                                <li class="texto-css"><input type="checkbox" name="nacion" id="Inazuma"><img
                                        src="../img/inazuma.png" height="40px">Inazuma</li>
                                <li class="texto-css"><input type="checkbox" name="nacion" id="Sumeru"><img
                                        src="../img/sumeru.png" height="40px">Sumeru</li>
                                <li class="texto-css"><input type="checkbox" name="nacion" id="Fontaine"><img
                                        src="../img/fontaine.png" height="40px">Fontaine</li>
                                <li class="texto-css"><input type="checkbox" name="nacion" id="Natlan"><img
                                        src="../img/natlan.png" height="40px">Natlan</li>
                                <li class="texto-css"><input type="checkbox" name="nacion" id="Nod-Krai"><img
                                        src="../img/nod-k.png" height="40px">Nod-Krai</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
            <table id="tablas-npcs">
                <tr>
                    <th>Nombre</th>
                    <th>Región</th>
                    <th>Elemento</th>
                </tr>
            </table>
            <div class="mobs-npcs-datos-consejos">
                <ul>
                    <li id="consejos-mobs-no-npcs">
                        <h3 class="texto-css" id="consejos-datos-nav">¡Algunos consejos o datos para que te ayuden
                            en tu
                            aventura!</h3>
                        <img class="img_cont" src="../img/mobs_no_post1.jpg">
                    </li>
                    <ul>
                        <li class="texto-css texti-css">
                            El Truco del "Hablador Insaciable" para los NPCs: Habla con todos los NPCs que tengan un
                            nombre
                            propio, especialmente si tienen opciones de diálogo que no parecen ser de una misión.
                            Muchos NPCs te darán objetos gratis (libros de experiencia, artefactos de 3 estrellas,
                            comida o incluso materiales de ascensión) la primera vez que agotes su diálogo. En el
                            inicio del juego, estos recursos son un impulso enorme para tu progresión sin gastar ni
                            un
                            solo
                            punto de resina.
                        </li>
                    </ul>
                    <ul>
                        <li class="texto-css texti-css">
                            ¡No corras tras el brillo, camina cuando haya fauna!: Si ves un Cristóptero (las
                            mariposas
                            brillantes de colores),
                            ¡no corras hacia ellas desesperadamente! Si corres, se asustan antes de que llegues. Lo
                            mejor es
                            acercarse caminando o saltar desde un punto alto hacia ellas. Estos animales te dan
                            Núcleos
                            de
                            Cristal, el objeto más importante para fabricar Resina Condensada más adelante. Sin
                            ellos,
                            tu progreso se volverá mucho más lento cuando empieces a farmear dominios.
                        </li>
                    </ul>
                    <ul>
                        <li class="texto-css texti-css">
                            El "Equipo de Caza" Silencioso para la fauna: Si tienes la suerte de obtener personajes
                            como Sayu o Kirara, mantenlos en tu equipo mientras exploras. Sus talentos pasivos
                            hacen que los animales (aves, jabalíes o cristópteros) no se asusten al verte llegar.
                            Esto convierte el recolectar comida y núcleos de cristal en un paseo por el parque
                            en lugar de una persecución frustrante.
                        </li>
                    </ul>
                    <ul>
                        <li class="texto-css texti-css">
                            La Ley del Reloj para los NPCs: Si no encuentras a un NPC que debería estar en un sitio,
                            o si una tienda está cerrada, usa el menú de Pausa > Reloj para cambiar la hora.
                            Muchos jugadores nuevos creen que un NPC ha desaparecido por un error (bug),
                            pero simplemente es que se fue a dormir o a la taberna. Cambiar la hora a las
                            8:00 AM suele solucionar el 90% de estos problemas de "desaparición".
                        </li>
                    </ul>
                    <ul>
                        <li class="texto-css texti-css">
                            Compra "Especialidades Locales" de los NPCs: Ubica a los comerciantes que venden flores
                            raras (como las de Flora en Mondstadt o el Herbolario Gui en Liyue). Personajes
                            poderosos necesitan flores que solo crecen en lugares difíciles de escalar.
                            Comprarlas cada semana te permite subir de nivel a tus personajes mucho más
                            rápido que si tuvieras que escalar montañas cada vez que necesites una.
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