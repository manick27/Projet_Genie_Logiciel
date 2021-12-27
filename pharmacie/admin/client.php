<?php

    session_start();
    require_once "../functions.php";
    $state = 0;

    if(!verifConAdmin()){
        header("Location: index.php");
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
    <title>L'administrateur</title>
</head>
<body>
    <section id="section">
        <section id="containt">
            <h1>Les clients</h1>
            <table>
                <thead>
                    <tr>
                        <th>Matricule</th>
                        <th>Noms&Prenoms</th>
                        <th>Numero CNI</th>
                        <th>Tel</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </section>
    </section>
    <?php
        // require_once("../footer.php");
        }
    ?>
</body>
</html>