function remplir($n) {
    $tableau = [];
    for ($i = 0; $i < $n; $i++) {
        $tableau[] = rand(1, 15) * 2; // Donne toujours un pair entre 2 et 30
    }
    return $tableau;
}