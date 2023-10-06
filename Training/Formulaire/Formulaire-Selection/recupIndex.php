<?php   
// $nom=$_POST['nom'];
// $prenom=$_POST['prenom'];
// echo "Bonjour".$prenom." ".$nom;

  /* Connexio a la base de donnee ---- les fonctions try  catche permet d'enlever 
  les exceptions et de les traiters try{}catch(){}...;
  */ 
try{
$user='root';
$pass='';
$dbn= new Pdo('mysql:host=localhost;dbname=web2',$user,$pass);
//requete sql a la base de donnee
$requete="SELECT * from etudiant";
//parcourir la base de donnnee
foreach($dbn->query($requete) as $row){
    
    // print_r($row);
    // afficher  la base de donnee;
    afficher($row);
}
$dbn=null; 

}catch(PDOException $e){
    print "Erreur !".$e->getMessage();
    die();
}
function afficher($row){
    echo 'Prenom:'.$row['prenom'].'<br/>';
    echo 'Nom:'.$row['nom'].'<br/>';
    echo 'Telephone:'.$row['telephone'].'<br/>';
    echo 'adresse:'.$row['adresse'].'<br/>';

}

?>