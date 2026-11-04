<?php
session_start();

if (isset($_POST['indice'])) {
    unset($_SESSION['panier'][$_POST['indice']]);
}

header("Location: panier.php");
exit;
