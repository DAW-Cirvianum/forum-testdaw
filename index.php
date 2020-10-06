<?php

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estil.css">
    <title>Log In</title>
</head>
<body>
<form class="login" action="foro.php" method="post">
    <h2>Log In</h2>
    <label>User: </label>
    <input type="text" name="user" value="">
    <label>Password:</label>
    <input type="password" name="pass" value="">

    <input type="submit" name="enviar" value="Enviar dades"/>
    <input type="reset" name="Esborrar Dades" value="Esborra!"/>

</form>
</body>
</html>
