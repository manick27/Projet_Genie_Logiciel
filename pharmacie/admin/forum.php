<?php

    session_start();
    require_once "../functions.php";
    $state = 0;

    if(!verifConAdmin()){
        header("Location: connexion.php");
    }
    else{
        require_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum de discussion</title>
</head>
<body>
    <section id="containt">
        <h1></h1>
        <div id=forum>
            <div id="reception">

            </div>
            <form>
                <textarea name="" id="message"></textarea>
                <button id="env">Envoyer</button>
            </form>
        </div>
    </section>
</body>
</html>
<?php
    // require_once "footer.php";
    }
?>