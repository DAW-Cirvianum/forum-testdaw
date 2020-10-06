<?php
session_start();

$llistaUsuaris = array(
    array("hector", "miquel"),
    array("1234", "12345")
);

if (isset($_POST['enviar'])) {


    $usuari = $_REQUEST["user"];
    $pass = $_REQUEST["pass"];
    $llistaSubjects = array("Primer Subject");
    $llistaMissatges = array("Primer Missatge... sajsdasdao asdhjsdahsk as dkhasd hk das");
    $llistaAutors = array("Hector");
    $_SESSION['llistaSubjects'] = $llistaSubjects;
    $_SESSION['llistaMissatges'] = $llistaMissatges;
    $_SESSION['llistaAutors'] = $llistaAutors;
}


if (isset($_POST['enviar'])) {
    $signOk = false;

    for ($i = 0; $i < count($llistaUsuaris[0]); $i++) {
        if ($llistaUsuaris[0][$i] == $usuari) {
            //echo 'Usuari trobat <br>';
            if ($llistaUsuaris[1][$i] == $pass) {
                $signOk = true;
            }
            break;
        }
    }
    if (!$signOk) {
        header("Location: ./");
        die();
    } else {
        echo "<h1 style='margin: 20px'> Welcome $usuari </h1>";
    }

}





if (isset($_POST['guarda'])) {
    //echo 'SESSION ' . var_dump($_SESSION['llistaMissatges']) . '<br>';
    $llistaMissatges = $_SESSION['llistaMissatges'];
    $llistaSubjects = $_SESSION['llistaSubjects'];
    $llistaAutors = $_SESSION['llistaAutors'];
    $subject = $_REQUEST["subject"];
    $message = $_REQUEST["message"];
    array_push($llistaSubjects,$subject);
    array_push($llistaMissatges,$message);
    array_push($llistaAutors,$usuari);
    $_SESSION['llistaMissatges'] = $llistaMissatges;
    $_SESSION['llistaSubjects'] = $llistaSubjects;
    $_SESSION['llistaAutors'] = $llistaAutors;


}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estil.css">
    <title>Formulari</title>
</head>
<body>

<form class="message" action="foro.php" method="post">
    <h2>Write Post</h2>
    <label>Subject: </label>
    <input id="subject " type="text" name="subject" value="">
    <label>Message: </label>
    <textarea class="bodymessage" name="message" rows="6" cols="50"></textarea>

    <input type="submit" name="guarda" value="Guardar Post"/>
    <input type="reset" name="Esborrar Dades" value="Esborra!"/>
</form>

<div class="messageList">
    <?php

        for($i=0;$i<count($llistaMissatges);$i++){
        echo '<div class="titolM"><h2>' . $llistaSubjects[$i] . '</h2></div>';
        echo '<div class="bodyM"><p>' . $llistaMissatges[$i] . '</p></div>';
        echo '<div class="authorM">' . $llistaAutors[$i] . '</div>';
        echo '<hr>';
        }

    ?>
</div>

</body>
</html>