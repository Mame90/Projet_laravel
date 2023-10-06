<?php
$servername = "localhost";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "formulaire_db";

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $nationality = $_POST["nationality"];
    $gender = $_POST["gender"];
    $message = $_POST["message"];

    // Préparer et exécuter la requête d'insertion
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, address, email, nationality, gender, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $first_name, $last_name, $address, $email, $nationality, $gender, $message);

    if ($stmt->execute()) {
        echo "Les données ont été enregistrées avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'enregistrement des données : " . $stmt->error;
    }

    $stmt->close();
}

// Fermer la connexion à la base de données
$conn->close();
?>
