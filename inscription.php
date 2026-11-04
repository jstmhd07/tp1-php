<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

$erreurs = array();

if (isset($_POST['inscription'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirmation = trim($_POST['confirmation']);

    if ($username == "") {
        $erreurs[] = "Le nom d'utilisateur est obligatoire.";
    }

    if ($password == "") {
        $erreurs[] = "Le mot de passe est obligatoire.";
    } elseif (strlen($password) < 4) {
        $erreurs[] = "Le mot de passe doit contenir au moins 4 caracteres.";
    }

    if ($password != $confirmation) {
        $erreurs[] = "Les deux mots de passe ne sont pas identiques.";
    }

    if (count($erreurs) == 0) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>

<h2>Inscription</h2>

<?php
if (count($erreurs) > 0) {
    echo "<div style='color:red'>";
    foreach ($erreurs as $erreur) {
        echo "<p>$erreur</p>";
    }
    echo "</div>";
}
?>

<form action="inscription.php" method="POST">

    <label>Nom d'utilisateur :</label><br>
    <input type="text" name="username"><br><br>

    <label>Mot de passe :</label><br>
    <input type="password" name="password"><br><br>

    <label>Confirmer le mot de passe :</label><br>
    <input type="password" name="confirmation"><br><br>

    <button type="submit" name="inscription">S'inscrire</button>

</form>

<p>Déjà inscrit ? <a href="login.php">Se connecter</a></p>

</body>
</html>
