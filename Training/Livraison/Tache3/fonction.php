<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 function afficher($name){
    
    
    echo '<p> Bonjour Monsieur '.$name.'</p>';
    require 'surface.php';
 }
afficher('Ousmane');
// afficher('Boubacar');
// afficher('Demab');
// afficher('oumou');
// afficher('khady');

?>

</body>
</html>