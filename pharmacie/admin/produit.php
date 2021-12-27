<?php

    session_start();
    require_once "../functions.php";

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
    <title>Espace Personnel</title>
    <link rel="stylesheet" href="Css/form.css">
</head>
<body>
    <section id="section">
        <section id="containt">
            <h1>Les produits</h1>
            
            <input type="submit" id="ajout" value="Ajouter un produit?">
            <div id="agence">
                    <form action="produit.php" method="POST">
                        <input type="text" name="nomAg" id="nom" placeholder="Nom du produit"><br>
                        <input type="email" name="emailAg" id="email" placeholder="quantité du produit"><br>
                        <input type="tel" name="telAg" id="tel" placeholder="Prix Unitaire" onkeypress="return event.charCode >= 48 && event.charCode <= 57"><br>
                        <input type="text" name="adresseAg" id="adresse" placeholder="date de péremption"><br>
                        <input type="text" name="adresseAg" id="adresse" placeholder="dosage"><br>
                        <input type="submit" id="ajouter" value="Ajouter">
                    </form>
                </div>
            <table>
                <thead>
                    <tr>
                        <th>Num_Pro</th>
                        <th>Nom</th>
                        <th>Quantité</th>
                        <th>Prix U</th>
                        <th>Date péremption</th>
                        <th>Dosage</th>
                        <th>Conditionnement</th>
                        <th colspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            <div>
               
            </div>
        </section>
    </section>
    <?php
        // require_once("../footer.php");
        }
    ?>
    <script type="text/javascript" src="js/formVisi.js"></script>
</body>
</html>