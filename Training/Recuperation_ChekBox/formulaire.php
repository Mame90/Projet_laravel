<div>
        <h2 style="font-size: 18px;color:#222;text-align:center;background-color:#c29938">Recuperation des donnees d'un CheckBox</h2>
    </div>

<form action="" method="post">
        Choisissez les pays de votre choix :<br />
        France: <input type="checkbox" name="pays[]" value="France"><br>
        Sénégal: <input type="checkbox" name="pays[]" value="Sénégal"><br>
        Allemagne: <input type="checkbox" name="pays[]" value="Allemagne"><br>
        Usa: <input type="checkbox" name="pays[]" value="Usa"><br>
        <input type="submit" name="enregistrer" value="enregistrer">
    </form>
    <?php
    if(isset($_REQUEST['enregistrer'])){
        $pays=$_POST['pays'];
        foreach($pays as $pa =>$p)
        echo $pays[$pa].'<br/>';
    }
   
   ?>
   <?php
// echo $_GET['pays'];
// echo $_REQUEST['pays'];
?>
<a href= "../Formulaire-php/index.php?nom=Diop&prenom=moussa&age=10">envoyer </a>
<?php

// echo "Nom:" . $_GET["nom"] . "<br />";
?>

