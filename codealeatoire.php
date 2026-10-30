<?php

function generateur(int $longueur = 15): string
{
	$caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$code = '';

	for ($i = 0; $i < $longueur; $i++) {
		$code .= $caracteres[random_int(0, strlen($caracteres) - 1)];
	}

	return $code;
}

echo generateur();
