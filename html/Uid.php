<?php
    include("../PHP/conexion.php");
?>
<!DOCTYPE html>
<html>

    <head>
        <link rel="icon" href="../img/mini_logo.png">
        <link rel="stylesheet" href="../css/cod.css">
        <title>Ingresar UID</title>
        <link rel="stylesheet" href="../css/UidEstilo.css">
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>

    <body>

        <div class="warning_message"><!--mensaje para que el usuario tenga en cuenta la recomendación-->
            <h2>¡No olvides que, antes de ingresar tu UID, debes tener los personajes, 
            que deseas builder o armar, en la galeria de tu perfil!</h2>
        </div>
        <div class="buscador"><!--acá sólo pondré que dentro de la barra de busqueda se muestre el "ingrese aquí su UID"-->
            <form method="get" action="P_builder.php">
                <input type="number" name="UID" placeholder="Ingrese aquí su UID" required>
            </form>
        </div>
    </body>

</html>