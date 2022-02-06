<?php
function recuperation():array 
{
    require_once('connexion.php');
    $reponse = $bdd->prepare('SELECT nom,prenom FROM etudiant WHERE filiere="IRT"AND niveau ="L1" AND groupe="1"');
   $reponse ->execute();
   $afficher= $reponse->fetchAll();
   if($afficher !=null) 
       return $afficher;
       else return  array();
}
?>
    <p>ETUDIANTS DE GESTION L1</p>
    
             <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                </tr>   
                  
<?php

//foreach (recuperation() as $key => $value) {
 //   ?>
   <!-- <tr>
        <td><?=$value['nom']?></td>
       <td><?=$value['prenom']?></td>     
    </tr>--
    <?php

//}
//?>