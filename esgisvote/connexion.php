<?php
try

    {
        $bdd = new PDO('mysql:host=localhost;dbname=esgisvote', 'root', '');
        echo"connexion";
    }

catch(Exception $e)

    {
        die('Erreur : '.$e->getMessage());
    }
    
?>