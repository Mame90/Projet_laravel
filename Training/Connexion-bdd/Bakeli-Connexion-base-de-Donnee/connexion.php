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