<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec icônes alignées horizontalement</title>
    <!-- Lien vers Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <form>
        <div class="form-group">
            <label for="prenom">First Name:</label>
            <div class="input-container">
                <i class="fa fa-user fa-lg"></i>
                <input type="text" id="prenom" name="prenom" placeholder="First Name" required>
            </div>
        </div>
        <div class="form-group">
            <label for="nom">Last Name:</label>
            <div class="input-container">
                <i class="fa fa-user fa-lg"></i>
                <input type="text" id="nom" name="nom" placeholder="Last Name" required>
            </div>
        </div>
        <div class="form-group">
            <label for="depoffice">Department/Office:</label>
        
            <div class="input-container">
                <i class="fa-solid fa-bars"></i>
                <img src="faa.png" alt="" class="fa-solid1">
              <select name="depoffice" id="depoffice"  style="width: 293px;">
                
                <option value="">Select your Department/Office</option>
                <option value="FBI">FBI</option>
                <option value="CIA">CIA</option>
              </select>
              
            </div>
        </div>
        <div class="form-group">
            <label for="user">Userame:</label>
            <div class="input-container">
                <i class="fa fa-user fa-lg"></i>
                <input type="text" id="user" name="user" placeholder="Username" required>
            </div>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <div class="input-container">
                <i class="fa fa-lock fa-lg"></i>
                <input type="text" id="password" name="password" placeholder="password" required>
            </div>
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password:</label>
            <div class="input-container">
                <i class="fa fa-lock fa-lg"></i>
                <input type="text" id="cpassword" name="cpassword" placeholder="Confirm password" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email">E-mail :</label>
            <div class="input-container">
                <i class="fa fa-envelope fa-lg"></i>
                <input type="email" id="email" name="email" placeholder="E-mail address" required>
            </div>
        </div>
        <div class="form-group">
            <label for="telephone">Contact No.</label>
            <div class="input-container">
                <i class="fa fa-phone fa-lg"></i>
                <input type="number" id="telephone" name="telephone" placeholder="(639)" required>
            </div>
        </div>
        <button type="submit" class="button-icon">
            <i class="fa fa-paper-plane"></i> Envoyer
        </button>
    </form> -->
    <div>
        <h2 style="font-size: 18px;color:#222;text-align:center;background-color:#c29938">Recuperation des donnees d'un Formulaire</h2>
    </div>
    <form action="" method="post">
        Name: <input type="text" name="username"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" name="valider" value="Envoyer le formulaire">
    </form>
    <?php
    if (isset($_REQUEST['valider'])) {
        $usr = $_POST['username'];
        $mail = $_REQUEST['email'];
    }
    // if (isset($usr) and (isset($mail)))
        // echo 'the name is:'.$_POST['username']."<br/>";
        // echo 'the email is:'.$_POST['email']."<br/>";

        // la methode extract permet d'exporte un tableau en variable .Ainsi la methode $_Post;
    ?>
    <div style="background-color: bisque; text-align:center;color:red;padding-top:20px;padding-bottom:20px;width:20%;margin-left:550px;margin-top:10px">
        <?php
//         if (isset($usr) and (isset($mail)))
//   echo 'the name is:'.$_POST['username']."<br/>";
//         echo 'the email is:'.$_POST['email']."<br/>";

    extract($_POST);
    echo $username . "<br/>";
    echo $email;

        ?>
        <a href= "../Formulaire-php/index.php?nom=Diop&prenom=moussa&age=10">envoyer </a>
<?php
 echo "Nom a recuper est:" . $_GET["nom"] . "<br />";
?>
    </div>
  
   
</body>

</html>