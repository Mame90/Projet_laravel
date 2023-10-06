
<?php
if(isset($_REQUEST['valider'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $telephone=$_POST['telephone'];
    $adresse=$_POST['adresse'];
    // $id=$_POST['idetudiant'];
    if((isset($nom) and (isset($prenom)) and (isset($telephone)) and (isset($adresse))));
}
$user='root';
$pass='';
$dbname='web2';

try{
    $conne= new PDO('mysql:host=localhost;dbname=web2',$user,$pass);
    $conne->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  
  $requete= "INSERT INTO etudiant (prenom,nom,telephone,adresse) 
    values ('$prenom','$nom','$telephone','$adresse')";
     
   
        $conne->exec($requete);
        echo 'enregistrement reussit avec succees !';
    

}catch(PDOException $e){
    echo $requete."<br>". $e->getMessage();

}$conne=null;

?>