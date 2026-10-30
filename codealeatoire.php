<?php
$code = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

	// Choisit 15 caractères aléatoires parmi les chiffres et les lettres.
	for ($i = 0; $i < 15; $i++) {
		$code .= $caracteres[random_int(0, strlen($caracteres) - 1)];
	}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Code</title>
</head>
<body>
	<h1>Code au hasard</h1>

	<form method="post">
		<button type="submit">Créer un code</button>
	</form>

	<?php if ($code !== ''): ?>
		<p>Ton code : <strong><?= htmlspecialchars($code, ENT_QUOTES, 'UTF-8') ?></strong></p>
	<?php endif; ?>
</body>
</html>
