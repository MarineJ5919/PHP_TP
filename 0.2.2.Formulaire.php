<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $prenom = $_POST['prenom'];
    
    if (!empty($prenom)) {
        $message = "Bienvenue $prenom";
    } else {
        $message = "Veuillez entrer votre prénom.";
    }
} else {
    $message = "";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <h1>Bienvenue</h1>
    
    <form method="post" action="">
        <label for="prenom">Votre prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit">Envoyer</button>
    </form>
    
    <p><?php echo $message; ?></p>
</body>
</html>
