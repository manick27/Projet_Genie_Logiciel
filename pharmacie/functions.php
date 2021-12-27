<?php

    function startConnection(){
        try{
            $db=new PDO('mysql:host=localhost;dbname=transcolis','root','');
            $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);//les noms des champs seront enn caractère miniscules
            $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//les erreurs lanceront des exceptions
        }catch(Exception $e){
            echo'une erreur est survenue';
            die();
        }

        return $db;
    }

    function stopConnection($db)
    {
        $db=null;
    }

    function ajouterClient($nom, $prenom, $email, $tel, $cni, $region, $ville, $pass){
        //appel de la fonction de connexion
        $db = startConnection();
 
        //enregistrement du client dans la base de donnees
        if($nom && $prenom && $email && $tel && $cni && $region && $ville && $pass){
            try{
                $insert = $db->prepare("INSERT INTO client (nom, prenom, email, tel, numcni, region, ville, motdepasse) VALUES('$nom', '$prenom', '$email', '$tel', '$cni', '$region', '$ville', '$pass')");
                $insert->execute();
            }catch(Exception $e){
                echo'Une erreure est survenue lors de l\'insertion';
            }
        }
        stopConnection($db);
        return true;
     }
     
     function connecterClient($username, $password) {
        if($username && $password){
            $db = startConnection();
            try{
                $select = $db->prepare("SELECT * FROM client WHERE email='$username' AND motdepasse='$password'");
                $select->execute();
                stopConnection($db);
            }catch(Exception $e){
                
            }
            while($ligne = $select->fetch(PDO::FETCH_OBJ)) {
                if($ligne->email == $username && $ligne->motdepasse == $password){
                    $_SESSION['matricule'] = $ligne->matricule;
                return true;
                }
            }
            return false;
        }
    }

    function connecterAdmin($username, $password){
        $login = 'LaPanick27';
        $pass = 'azerty12';
        if($login == $username && $pass == $password){
            $_SESSION['matricule'] = 1;
            return true;
        }
        return false;
    }

    function verifConAdmin(){
        return isset($_SESSION['matricule']);
    }

    function verifCon(){
        return isset($_SESSION['matricule']);
    }

    function getClient(){
        $id=$_SESSION['matricule'];
        $db = startConnection();
        $select = $db->prepare("SELECT * FROM client WHERE matricule='$id'");
        $select->execute();
        stopConnection($db);
        return $select;
    }

    function getAllClient(){
        $db = startConnection();
        $select = $db->prepare("SELECT * FROM client WHERE matricule > 1");
        $select->execute();
        stopConnection($db);
        return $select;
    }

    function getProduit(){
        $db = startConnection();
        $select = $db->prepare("SELECT * FROM Produit");
        $select->execute();
        stopConnection($db);
        return $select;
    }
   

?>