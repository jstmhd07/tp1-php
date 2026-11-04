<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}

$erreur = "";

if (isset($_POST['connexion'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if ($username == "" || $password == "") {
        $erreur = "Veuillez remplir tous les champs.";
    } elseif ($username == "admin" && $password == "1234") {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $erreur = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>

<h2>Connexion</h2>

<?php
if ($erreur != "") {
    echo "<p style='color:red'>$erreur</p>";
}
?>

<form action="login.php" method="POST">

    <label>Nom d'utilisateur :</label><br>
    <input type="text" name="username"><br><br>

    <label>Mot de passe :</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit" name="connexion">Se connecter</button>

</form>

<p>Pas encore de compte ? <a href="inscription.php">S'inscrire</a></p>

</body>
</html>
