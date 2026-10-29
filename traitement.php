<?php
session_start();

// Récupération des données du formulaire
$prenom   = trim($_POST['prenom']);
$nom      = trim($_POST['nom']);
$email    = trim($_POST['email']);
$pays     = $_POST['pays'];
$sexe     = isset($_POST['sexe']) ? $_POST['sexe'] : '';
$interets = isset($_POST['interets']) ? $_POST['interets'] : [];

// Tableau des erreurs
$erreurs = [];

// --- Règles de validation ---

// 1. Prénom obligatoire
if (empty($prenom)) {
    $erreurs[] = "Le prénom est obligatoire.";
}

// 2. Nom obligatoire
if (empty($nom)) {
    $erreurs[] = "Le nom est obligatoire.";
}

// 3. Email obligatoire et valide
if (empty($email)) {
    $erreurs[] = "L'email est obligatoire.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = "L'adresse email n'est pas valide.";
}

// 4. Pays obligatoire
if (empty($pays)) {
    $erreurs[] = "Veuillez choisir un pays.";
}

// 5. Sexe obligatoire
if (empty($sexe)) {
    $erreurs[] = "Veuillez sélectionner votre sexe.";
}

// 6. Au moins un centre d'intérêt coché
if (empty($interets)) {
    $erreurs[] = "Veuillez cocher au moins un centre d'intérêt.";
}

// --- S'il y a des erreurs : on retourne vers index2.php ---
if (!empty($erreurs)) {
    $_SESSION['erreurs'] = $erreurs;
    $_SESSION['ancien']  = $_POST; // On garde les données saisies
    header("Location: index2.php");
    exit;
}

// --- S'il n'y a pas d'erreurs : affichage des données ---
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Données reçues</title>
</head>
<body>

<h2>Formulaire soumis avec succès !</h2>

<p><strong>Prénom :</strong> <?php echo htmlspecialchars($prenom); ?></p>
<p><strong>Nom :</strong> <?php echo htmlspecialchars($nom); ?></p>
<p><strong>Email :</strong> <?php echo htmlspecialchars($email); ?></p>
<p><strong>Pays :</strong> <?php echo htmlspecialchars($pays); ?></p>
<p><strong>Sexe :</strong> <?php echo htmlspecialchars($sexe); ?></p>
<p><strong>Centres d'intérêt :</strong> <?php echo implode(', ', $interets); ?></p>

<br>
<a href="index2.php">← Retour au formulaire</a>

</body>
</html>
