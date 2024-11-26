<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Sessions</title>
</head>
<body>
    <?php
        // code Seb
    session_start();

    if (isset($_SESSION['nom'], $_SESSION['email'])) {
        echo "<h1>Bienvenue, {$_SESSION['nom']}!</h1>";
        echo "<p>Email: {$_SESSION['email']}</p>";
        echo '<form method="POST" action="">
                <button type="submit" name="logout">Déconnexion</button>
              </form>';
        if (isset($_POST['logout'])) {
            session_destroy();
            header("Location: /");
            exit;
        }
    } else {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom'], $_POST['email'])) {
            $_SESSION['nom'] = htmlspecialchars($_POST['nom']);
            $_SESSION['email'] = htmlspecialchars($_POST['email']);
            header("Location: ./");
            exit;
        }
        echo '<h1>Connexion</h1>';
        echo '<form method="POST" action="">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required><br><br>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required><br><br>

                <button type="submit">Se connecter</button>
              </form>';
        }
    ?>
</body>
</html>

