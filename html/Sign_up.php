<?php
    include("../PHP/conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/Sign_upEstilo.css">
    <link rel="stylesheet" href="../css/cod.css">
    <title>Crear Cuenta</title>
    <link rel="icon" href="../img/mini_logo.png">
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="conte">
        <div class="box_sign_up">
            <h2>Crear cuenta</h2>
            <form method="post">
                <label class="label-email" for="ing_correo">Ingresar Correo</label><br>
                <input class="email-input" type="email" name="ing_correo" placeholder="tuki_ejemplo@gmail.com"><br>
                <label class="label-email" for="user_name">Ingrese su nombre de ususario</label><br>
                <input class="contra-input" type="text" name="user_name" placeholder="Tuki_nombre_ejemplo"><br>
                <span id="error_crear_nombre"></span>
                <label class="label-contra" for="password">Ingrese su contraseña</label><br>
                <input class="contra-input" type="password" name="password" placeholder="Contr4zeñ#"><br>
                <input class="submit-input" type="submit" value="Crear Cuenta">
            </form>
        </div>
    </div>

</body>

</html>