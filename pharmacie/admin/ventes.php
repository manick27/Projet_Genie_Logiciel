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
    <title>Transactions</title>
    <link rel="stylesheet" href="../Css/infoTrans.css">
</head>
<body>
    <section id="section">
        <section id="containt">
            <h1>Les ventes</h1>
            <table>
                <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Quantité</th>
                        <th>Prix U</th>
                        <th>Prix total</th>
                        <th>Date</th>
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