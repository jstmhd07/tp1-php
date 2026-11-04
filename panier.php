<?php
// =========================================================
//  TP 3 : MINI APPLICATION DE PANIER D'ACHAT
//  Tableaux + formulaire + fonctions + session
// =========================================================

// 1. On démarre la session (obligatoire pour garder le panier)
session_start();

// 2. Si le panier n'existe pas encore, on le crée : un tableau vide
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

// 3. Variables pour afficher les messages
$message = "";
$couleur = "red";


// =========================================================
//  PARTIE 1 : LES FONCTIONS DE CONTROLE
//  Chaque fonction renvoie "" si tout va bien,
//  ou un message d'erreur si la valeur est mauvaise.
// =========================================================

// Controle du nom du produit
function verifierNom($nom)
{
    $nom = trim($nom);          // enleve les espaces inutiles
    if ($nom == "") {
        return "Le nom du produit est obligatoire.";
    }
    return "";
}

// Controle du prix
function verifierPrix($prix)
{
    if ($prix == "") {
        return "Le prix est obligatoire.";
    }
    if (!is_numeric($prix)) {
        return "Le prix doit etre un nombre.";
    }
    if ($prix <= 0) {
        return "Le prix doit etre superieur a 0.";
    }
    return "";
}

// Controle de la quantite
function verifierQuantite($quantite)
{
    if ($quantite == "") {
        return "La quantite est obligatoire.";
    }
    if (!is_numeric($quantite)) {
        return "La quantite doit etre un nombre.";
    }
    if ($quantite <= 0) {
        return "La quantite doit etre superieure a 0.";
    }
    return "";
}

// Controle du nombre de produits : 5 maximum
function verifierNombreProduits()
{
    if (count($_SESSION['panier']) >= 5) {
        return "Impossible : le panier est plein (5 produits maximum).";
    }
    return "";
}


// =========================================================
//  PARTIE 2 : LES FONCTIONS DU PANIER
// =========================================================

// Ajouter un produit dans la session
function ajouterProduit($nom, $prix, $quantite)
{
    $_SESSION['panier'][] = array(
        "nom"      => $nom,
        "prix"     => $prix,
        "quantite" => $quantite
    );
}

// Calculer le montant total du panier
function calculerMontantTotal()
{
    $total = 0;

    foreach ($_SESSION['panier'] as $produit) {
        $total = $total + ($produit['prix'] * $produit['quantite']);
    }

    return $total;
}

// Calculer la reduction : 2% si le total depasse 25000 FCFA
function calculerReduction($total)
{
    if ($total > 25000) {
        return $total * 2 / 100;   // 2 %
    }
    return 0;
}

// Vider le panier
function viderPanier()
{
    $_SESSION['panier'] = array();
}


// =========================================================
//  PARTIE 3 : QUAND L'UTILISATEUR CLIQUE SUR UN BOUTON
// =========================================================

// Bouton "Vider le panier"
if (isset($_POST['vider'])) {
    viderPanier();
    $message = "Le panier a ete vide.";
    $couleur = "green";
}

// Bouton "Quitter"
if (isset($_POST['quitter'])) {
    viderPanier();
    header("Location: quitter.php");
    exit;
}

// Bouton "Ajouter"
if (isset($_POST['ajouter'])) {

    $nom      = $_POST['nom'];
    $prix     = $_POST['prix'];
    $quantite = $_POST['quantite'];

    // On lance les controles un par un
    $message = verifierNom($nom);

    if ($message == "") {
        $message = verifierPrix($prix);
    }
    if ($message == "") {
        $message = verifierQuantite($quantite);
    }
    if ($message == "") {
        $message = verifierNombreProduits();
    }

    // Si aucune erreur : on ajoute le produit
    if ($message == "") {
        ajouterProduit($nom, $prix, $quantite);
        $message = "Produit ajoute au panier.";
        $couleur = "green";
    }
}


// =========================================================
//  PARTIE 4 : LES CALCULS DU PANIER
// =========================================================

$total     = calculerMontantTotal();
$reduction = calculerReduction($total);
$aPayer    = $total - $reduction;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 3 - Mon panier</title>
</head>
<body>

<h1>TP 3 : Mon panier d'achat</h1>

<?php
// On affiche le message (erreur en rouge, succes en vert)
if ($message != "") {
    echo "<p style='color:$couleur'><strong>$message</strong></p>";
}
?>

<!-- ============ LE FORMULAIRE ============ -->
<h3>Ajouter un produit</h3>

<form action="panier.php" method="POST">

    <label>Nom du produit :</label><br>
    <input type="text" name="nom"><br><br>

    <label>Prix (FCFA) :</label><br>
    <input type="text" name="prix"><br><br>

    <label>Quantite :</label><br>
    <input type="text" name="quantite"><br><br>

    <button type="submit" name="ajouter">Ajouter au panier</button>
    <button type="submit" name="vider">Vider le panier</button>
    <button type="submit" name="quitter">Quitter</button>

</form>

<hr>

<!-- ============ LE TABLEAU DES PRODUITS ============ -->
<h3>Contenu du panier (<?php echo count($_SESSION['panier']); ?> / 5 produits)</h3>

<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th>N&deg;</th>
        <th>Nom du produit</th>
        <th>Prix</th>
        <th>Quantite</th>
        <th>Sous-total</th>
    </tr>

    <?php
    // Si le panier est vide
    if (count($_SESSION['panier']) == 0) {
        echo "<tr><td colspan='5'>Le panier est vide.</td></tr>";
    }

    // Sinon on affiche chaque produit
    $numero = 1;

    foreach ($_SESSION['panier'] as $produit) {
        $sousTotal = $produit['prix'] * $produit['quantite'];

        echo "<tr>";
        echo "<td>" . $numero . "</td>";
        echo "<td>" . htmlspecialchars($produit['nom']) . "</td>";
        echo "<td>" . number_format($produit['prix'], 0, ',', ' ') . " FCFA</td>";
        echo "<td>" . $produit['quantite'] . "</td>";
        echo "<td>" . number_format($sousTotal, 0, ',', ' ') . " FCFA</td>";
        echo "</tr>";

        $numero = $numero + 1;
    }
    ?>
</table>

<br>

<!-- ============ LE RESUME DU PAIEMENT ============ -->
<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <td><strong>Montant total</strong></td>
        <td><?php echo number_format($total, 0, ',', ' '); ?> FCFA</td>
    </tr>
    <tr>
        <td><strong>Reduction (2%)</strong></td>
        <td><?php echo number_format($reduction, 0, ',', ' '); ?> FCFA</td>
    </tr>
    <tr>
        <td><strong>Montant a payer</strong></td>
        <td><strong><?php echo number_format($aPayer, 0, ',', ' '); ?> FCFA</strong></td>
    </tr>
</table>

<p><em>La reduction de 2% est appliquee seulement si le montant total depasse 25 000 FCFA.</em></p>

</body>
</html>
