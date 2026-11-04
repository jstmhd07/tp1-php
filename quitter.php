<?php
// =========================================================
//  TP 3 : PAGE "QUITTER"
//  On detruit la session et on dit au revoir.
// =========================================================

session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 3 - Au revoir</title>
</head>
<body>

<h1>Merci de votre visite !</h1>

<p>Votre panier a ete supprime et la session est fermee.</p>

<p><a href="panier.php">Recommencer les achats</a></p>

</body>
</html>
