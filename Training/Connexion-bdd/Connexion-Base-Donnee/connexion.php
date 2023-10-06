<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form>
        <div class="form-group">
            <label for="prenom">Prenom:</label>
            <div class="input-container">
                <i class="fa fa-user fa-lg"></i>
                <input type="text" id="prenom" name="prenom" placeholder="Votre prenom ici.." required>
            </div>
        </div>
        <div class="form-group">
            <label for="nom">Nom:</label>
            <div class="input-container">
                <i class="fa fa-user fa-lg"></i>
                <input type="text" id="nom" name="nom" placeholder="votre nom ici.." required>
            </div>
        </div>
           <div class="form-group">
            <label for="telephone">Contact No.</label>
            <div class="input-container">
                <i class="fa fa-phone fa-lg"></i>
                <input type="number" id="telephone" name="telephone" placeholder="(+221 77 ... .. ..)" required>
            </div>
        </div>
        <button type="submit" class="button-icon">
            <i class="fa fa-paper-plane"></i> Envoyer
        </button>
    </form>


</body>
</html>
<?php
// $host="localhost";
// $user="root";
// $pass="";
// $base="web2";
// // connexion a la base de donnee : connexion procedurale  avec mysqli // 
// $con=mysqli_connect($host,$user,$pass,$base) or die ("Erreur de connexion ".mysqli_connect_errno($con));
// echo "Connexion réussie";
//************************************************************** *//

// connexion a la base de donnee : connexion orienter objet  avec mysqli // 
// $host="localhost";
// $user="root";
// $pass="";
// $base="web2";
// $con=new mysqli($host,$user,$pass,$base) ;
// if($con->connect_errno) die("Erreur code ".$con->connect_errno." : ". $con->connect_error);
// echo "Connexion réussie";
// $req1="insert into etudiant(id_etudiant,prenom,nom,adresse,telephone) 
// values('"."','Demba','Faye','Louga','709876543')";
// if(mysqli_query($con,$req1) === true)
// {
// echo "Enregistrement bien reussi";
// }
// else
// {
// echo "Echec d'enregistrement";
// }
// $req2="select prenom,nom,adresse,telephone from etudiant";
// if($result=mysqli_query($con,$req2))
// {
// echo "nombre d'enregistrement : ".mysqli_num_rows($result);
// // libération du résultat
// mysqli_free_result($result);
// }
// else
// {
// echo "Erreur selection à la base de données";
// }


// $con=@new mysqli("localhost","root","","web2");
// if($con->connect_errno)
// die("Erreur code ". $con->connect_errno. ":". $con->connect_errno);
// $req1="select prenom,nom,adresse,telephone from etudiant";
// if($result=$con->query($req1))
// {
// while($row=$result->fetch_row())
// {
// echo $row['0'] ." ".$row['1']." ".$row['2']." ".$row['3']."<br/>";
// }
// }
// else
// {
// echo "aucun enregistrement";
// }

$user='roost';
$pass='';
try
{
$con=new PDO('mysql:host=localhost;dbname=web2',$user,$pass);
echo "<h4 style='color:green;font-size:40px;background-color:bisque;text-align:center'>
Connexion à la base de donnee est reussi!</h4>";
}
catch(PDOException $e)
{
die("Erreur : " . $e->getMessage());
}

?>
