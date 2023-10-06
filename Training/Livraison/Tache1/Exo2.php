<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $a=3; $i=0;
    // while($i<=10){
    //     echo  $a.'*'.$i=$a*$i.'<br/>';
    //     $i++; 
    // }

    // for($i=1;$i<=10;$i++){
    //    echo  $a.'*'.$i=$a*$i.'<br/>';
    // };
    //  echo '<p style="color:red"> La somme des deux nombres est:'.$c.'</p'
    // $prenom = 'Mbaye';
    // $nom = 'Diop';
    // define('universite', ' universite Alioune Diop de Bambey');
    // const departement = 'TIC' . '<br>';


    // echo 'Salut' . " " . $prenom . " " . $nom . " " . "Vous etes etudiant a l'" . " " . universite . " " . "dans le departement" . " " . departement . '<br>';
    // // echo __LINE__.'<br/>';
    // // echo __File__.'<br/>';
    // // get_defined_constants('departement')
    // $type = 'Homme';
    // if ($type == 'Homme') {
    //     echo "Bonjour monsieur" . '<br><br>';;
    // } else if ($type == 'Femme') {
    //     echo "Bonjour madame" . '<br><br>';;
    // } else {
    //     echo "je ne connais pas le genre" . '<br><br>';;
    // } 
    // Les switch ******************* //

    $poid = 3500;
    switch ($poid) {
        case 1000:
            echo "Vous devriez competire sur le rang des poids leger";
            break;
        case 2000:
            echo "Vous devriez competire sur le rang des poids moyens";
            break;
        case 3500:
            echo "Bienvenue sur la Categorie des grands";
            break;
        default:
            echo "Desole mais votre poid n'est pas prise en charge .";
    }
    // ce code indique que avec l'absence de break, le code continue de s'execute une fois la premiere condition trouver
    // $i=2;
    // switch ($i) {
    // case 0: print "i egale 0";
    // case 1: print "i egale 1";
    // case 2: print "i egale 2";
    // default: print "i est inférieur à 0 ou supérieur à 2";
    // // }
    // $i=1;
    // switch ($i):
    //     case 0: print '<br>'."i égale 0";
    //     break;
    //     case 1: print '<br>'."i égale 1";
    //     break;
    // endswitch;


    // "<p>".'Utilisation des Boucles: les boucles FOr'."</p>"
    // $i=1;
    // while($i<=9){
    // //  print 'boucle Numero:'.$i.'<br>';
    // print "<br>"."3"."*".$i."=".$i*3;
    //  $i++;
    // }

    /* Utilisation de la boucle For*/
    for ($i = 1; $i <= 9; $i++) {
        print "<br>" . "5" . "*" . $i . " = " . $i * 5;
    }
    ?>
    <br>
    <?php
// Affichage d'heur 
    $date_du_jour = date("d-m-Y");
    echo 'Aujourd\'hui nous sommes le ' . $date_du_jour . "<br>";
    ?>
    <div style="background-color: bisque; padding-left:12px">
        <h3>Les Tableau avec le PHP</h3>
        <?php
        $premon = array("mbaye", "Moussa", "Abdou");
        // On peut declarer aussi un tableau aussi comsa:
        $premon = ["mbaye", "Moussa", "Abdou", 'Majigueun'];
        foreach ($premon as $affiche => $key)
            echo $key . "<br>";
        //  echo $premon[2]." "."Bienvenue dans ce Kokutana :)";
        ?>
    </div>
    <div>
        <h3 style="background-color: bisque;">Les Tableau-Associatif avec le PHP</h3>
        <?php
        $liste = array("Prenom" => "Mbaye", "Nom" => "Diop", "age" => "25", "Adrese" => "Dakar", "Status" => "Etudiant");
        foreach ($liste as $key => $info) {
            echo  $key . "&nbsp;&nbsp;" . $info . "<br>";
        }
        ?>
    </div>
    <div style="background-color: bisque;">
        <h3>Boucles for pour parcourir un tableau d'element php</h3>
        <?php
        $prenoms = array('Demba', 'Alioune', 'Issa', 'Fatou');
        for ($i = 0; $i < 4; $i++) {
            echo $prenoms[$i] . '<br />';
        }


        ?>


    </div>
    <div style="background-color: yellow;">
        <?php
        // $information= array ( 'prenom' => 'Demba', 'nom' => 'Thiam', 'adresse' => 'Linguere', 'ville' =>
        // 'Louga');
        // if (array_key_exists('nom', $information))
        // {
        // echo 'La clé "nom" se trouve dans les coordonnées !';
        // }
        // if (array_key_exists('quartier', $information))
        // {
        // echo 'La clé "quartier" se trouve dans les coordonnées !';
        // }

        $information = array('Demba', 'Fatou', 'Issa', 'Fallou', 'Aissatou');
        if (in_array('Issa', $information)) {
            echo 'La valeur "Issa" se trouve dans les informations !<br/>';
        }
        if (in_array('Aissatou', $information)) {
            echo 'La valeur "Aissatou" se trouve dans les informations !<br/>';
        }

        ?>
        <?php
        $information = array('Demba', 'Fatou', 'Issa', 'Fallou', 'Aissatou');
        $position = array_search('Issa', $information);
        echo '"Issa" se trouve en position ' . $position . '<br />';
        $position = array_search('Aissatou', $information);
        echo '"Aissatou" se trouve en position ' . $position."<br>";
        echo 'ce tableau contient:'.sizeof($information);
        
?></div>
<div style="background-color: bisque; margin-top:10px">
<h2 style="color:#222;font-weight:bold;text-align:center">Les Tablaux avec leurs Index</h2>
    <!-- Exercice 1:
Créer un tableau contenant les informations d’un étudiant (matricule, prénom,
nom, téléphone).
1. Utiliser la boucle for et foreach pour afficher les informations de
l’étudiant.
2. Utiliser la fonction print_r avec la balise <pre> pour un affichage
préformât.
3. Rechercher si une clé et une valeur se trouvent dans le tableau. -->
<?php
$infos=array('matricule'=>'1406432D','prenom'=>'Mbaye','nom'=>'Diop','telephone'=>'782309481');
// for($i=0;$i<4;$i++){
    //  echo $infos[$i];}
 foreach($infos as $cles => $valeurs){
    echo $cles. " " .$valeurs."<br>";
 }
 echo "<pre>";
   print_r($infos);
 echo "</pre>";

 if(array_key_exists("matricule",$infos)){
    echo "la cles existe ";
} else{
    echo "ce cles n'existe pas !!!";
}
if(in_array("Mbaye",$infos)){
    echo "la valeurs existe ";
} else{
    echo "cette valeurs n'existe pas !!!";
}

?>
    </div>
    <div>
    <?php
    echo 'la phrase suivante, sera melanger:je veux melanger ce chaine de caractere'."<br/>";
    $melange='je veux melanger ce chaine de caractere';
    echo 'Votre demande de melangement de mot a ete fait:'.str_shuffle($melange);    
    
    ?>
    </div>
    <div style="background-color: bisque;">
 <?php
  function somme(){
    $a=4;$b=2;
  $c=$a+$b;
  return 'la somme de ' .$a. '+' .$b. ' = '.$c;

  }
  echo  somme();
 
 ?>
 <?php
 function mafonction($a,$b){
    $somme=$a+$b;
    return 'la somme de ' .$a. '+' .$b. ' = '.$somme;
 }
 echo   mafonction(5,3);
 $phrase=  str_replace('e','g','eonjour') ;
//  echo str_replace('e', 'b','eonjour')

echo $phrase;
?>
<div style="background-color: yellow;">
<?php
include('Exo1.php');
?>

</div>
    </div>

</body>

</html>