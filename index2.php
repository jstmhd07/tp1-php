<?php
session_start();

// Récupération des erreurs venant de traitement.php
$erreurs = isset($_SESSION['erreurs']) ? $_SESSION['erreurs'] : [];
$ancien = isset($_SESSION['ancien']) ? $_SESSION['ancien'] : [];

// On efface les erreurs après les avoir récupérées
unset($_SESSION['erreurs']);
unset($_SESSION['ancien']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'inscription</title>
</head>
<body>

<h2>Formulaire d'inscription</h2>

<?php
// Affichage des erreurs
if (!empty($erreurs)) {
    echo "<div style='color:red; border:1px solid red; padding:10px;'>";
    echo "<strong>Erreurs :</strong><ul>";
    foreach ($erreurs as $erreur) {
        echo "<li>$erreur</li>";
    }
    echo "</ul></div>";
}
?>

<form action="traitement.php" method="POST">

    <label>Prénom :</label><br>
    <input type="text" name="prenom" value="<?php echo isset($ancien['prenom']) ? htmlspecialchars($ancien['prenom']) : ''; ?>"><br><br>

    <label>Nom :</label><br>
    <input type="text" name="nom" value="<?php echo isset($ancien['nom']) ? htmlspecialchars($ancien['nom']) : ''; ?>"><br><br>

    <label>Email :</label><br>
    <input type="text" name="email" value="<?php echo isset($ancien['email']) ? htmlspecialchars($ancien['email']) : ''; ?>"><br><br>

    <label>Pays :</label><br>
    <select name="pays">
        <option value="">-- Choisissez un pays --</option>
        <option value="Sénégal"   <?php echo (isset($ancien['pays']) && $ancien['pays'] == 'Sénégal')   ? 'selected' : ''; ?>>Sénégal</option>
        <option value="France"    <?php echo (isset($ancien['pays']) && $ancien['pays'] == 'France')    ? 'selected' : ''; ?>>France</option>
        <option value="Maroc"     <?php echo (isset($ancien['pays']) && $ancien['pays'] == 'Maroc')     ? 'selected' : ''; ?>>Maroc</option>
        <option value="Côte d'Ivoire" <?php echo (isset($ancien['pays']) && $ancien['pays'] == "Côte d'Ivoire") ? 'selected' : ''; ?>>Côte d'Ivoire</option>
    </select><br><br>

    <label>Sexe :</label><br>
    <input type="radio" name="sexe" value="Homme" <?php echo (isset($ancien['sexe']) && $ancien['sexe'] == 'Homme') ? 'checked' : ''; ?>> Homme
    <input type="radio" name="sexe" value="Femme" <?php echo (isset($ancien['sexe']) && $ancien['sexe'] == 'Femme') ? 'checked' : ''; ?>> Femme<br><br>

    <label>Centres d'intérêt :</label><br>
    <input type="checkbox" name="interets[]" value="Sport"       <?php echo (isset($ancien['interets']) && in_array('Sport',       $ancien['interets'])) ? 'checked' : ''; ?>> Sport<br>
    <input type="checkbox" name="interets[]" value="Musique"     <?php echo (isset($ancien['interets']) && in_array('Musique',     $ancien['interets'])) ? 'checked' : ''; ?>> Musique<br>
    <input type="checkbox" name="interets[]" value="Lecture"     <?php echo (isset($ancien['interets']) && in_array('Lecture',     $ancien['interets'])) ? 'checked' : ''; ?>> Lecture<br>
    <input type="checkbox" name="interets[]" value="Voyage"      <?php echo (isset($ancien['interets']) && in_array('Voyage',      $ancien['interets'])) ? 'checked' : ''; ?>> Voyage<br>
    <input type="checkbox" name="interets[]" value="Informatique" <?php echo (isset($ancien['interets']) && in_array('Informatique', $ancien['interets'])) ? 'checked' : ''; ?>> Informatique<br><br>

    <button type="submit">Envoyer</button>

</form>

</body>
</html>
