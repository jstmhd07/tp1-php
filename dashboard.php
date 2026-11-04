<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: inscription.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
</head>
<body>

<h2>Bienvenue <?php echo htmlspecialchars($_SESSION['username']); ?> !</h2>

<p>Vous êtes connecté.</p>

<form action="logout.php" method="POST">
    <button type="submit">Se déconnecter</button>
</form>

</body>
</html>
