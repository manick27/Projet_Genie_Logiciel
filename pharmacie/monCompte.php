<?php

    session_start();
    require_once "functions.php";
    $state = 0;

    if(!verifCon()){
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
    <title>Espace Personnel</title>
    <link rel="stylesheet" href="Css/form.css">
    <link rel="stylesheet" href="Css/background1.css">
</head>
<body>
    <section id="section">
        <section id="containt">
            <?php 
                $client=getClient();
                $ligne = $client->fetch(PDO::FETCH_OBJ);
                echo '<h1>'.$ligne->nom.'  '.$ligne->prenom.'</h1>';
                
            ?>
            <h1>Bienvenue dans votre espace Personnel</h1>
            <div id="div">
                <div id="profil">
                    <?php 
                        $client=getClient();
                        $ligne = $client->fetch(PDO::FETCH_OBJ);
                        echo substr($ligne->nom, 0, 1).''.substr($ligne->prenom, 0, 1);   
                    ?>
                    <!-- <i class="fas fa-user-circle profil" style="font-size: 1000%; color: green;"></i><br><br> -->
                    <!-- <a href="#">Modifier sa photo de profil</a> -->
                </div>
                <div id="infoCl">
                    <?php 
                        // affClient(); 
                        $client=getClient();
                        while($ligne = $client->fetch(PDO::FETCH_OBJ)) {
                            echo 'Email: <span>'.$ligne->email.'</span></br></br>';
                            echo 'Nom: <span>'.$ligne->nom.'</span></br></br>';
                            echo 'Prenom: <span>'.$ligne->prenom.'</span></br></br>';
                            echo 'Numéro de téléphone: <span>'.$ligne->tel.'</span></br></br>';
                            echo 'Region: <span>'.$ligne->region.'</span></br></br>';
                            echo 'Ville: <span>'.$ligne->ville.'</span></br></br>';
                        }
                    ?>
                </div>   
                <aside id="pub">
			        <i class="fas fa-clinic-medical" style="font-size: 2em;">3NPharma</i>
                    <h2></h2>
                    <div><?php require_once "sudheader.php"?></div>
                    <?php require_once"pub.php"?>
                </aside>
            </div>  
        </section>
    </section>
    <?php
        require_once("footer.php");
        }
    ?>
</body>
</html>