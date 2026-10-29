# TP 1 : Structure de Contrôle et Boucles en PHP

**Enseignant :** Dr. Birane Koundoul  
**Année Académique :** 2025-2026  
**Matière :** Programmation Web / PHP  

---

## 📁 Organisation des Fichiers

Ce dossier contient l'ensemble des solutions aux 11 exercices du **TP 1**, organisées de deux manières pour s'adapter à toutes les exigences d'évaluation :

| Fichier | Description | Notions abordées |
| :--- | :--- | :--- |
| **[`index.php`](exercice1.php)** | **Portail d'accueil & Sommaire** avec accès direct à chaque exercice | Interface / Navigation |
| **[`tp1.php`](tp1.php)** | **Page complète unifiée** regroupant les 11 exercices sur une seule page | Vue d'ensemble |
| **[`exercice1.php`](exercice1.php)** | Affichage pyramidal de chiffres de 1 à 7 | Boucles imbriquées `for` |
| **[`exercice2.php`](exercice2.php)** | Boucle `while` avec incrément de 3 et mise en valeur du 15 | Boucle `while`, condition `if` |
| **[`exercice3.php`](exercice3.php)** | Table de multiplication complète 10x10 quadrillée | Double boucle, tableaux HTML |
| **[`exercice4.php`](exercice4.php)** | Somme de deux nombres (avec formulaire interactif) | Opérateurs, `$_POST`, formulaires |
| **[`exercice5.php`](exercice5.php)** | Table de multiplication de 3 dans un tableau HTML | Boucle `for`, tableau HTML |
| **[`exercice6.php`](exercice6.php)** | Test de majorité (majeur ou mineur selon l'âge) | Structures conditionnelles `if / else` |
| **[`exercice7.php`](exercice7.php)** | Menu interactif avec sélection d'un chiffre | Structure `switch` / `case` |
| **[`exercice8.php`](exercice8.php)** | Moyenne des nombres de 1 à 10 avec `for` puis `while` | Algorithme de cumul et division |
| **[`exercice9.php`](exercice9.php)** | Nombres pairs de 0 à 100 avec les trois boucles | `for`, `while`, `do...while`, modulo `%` |
| **[`exercice10.php`](exercice10.php)** | Triangle d'étoiles (1 à 5 étoiles) | Double boucle `for` |
| **[`exercice11.php`](exercice11.php)** | Cône haut du sapin sur 6 lignes | Double boucle imbriquée, espacement |

---

## 🚀 Comment Exécuter et Visualiser le Projet

### Méthode 1 : Avec le serveur interne de PHP (Le plus simple et rapide)
Ouvrez un terminal PowerShell ou CMD dans ce dossier et tapez :
```bash
php -S localhost:8000
```
Puis ouvrez votre navigateur web à l'adresse :
👉 **[http://localhost:8000](http://localhost:8000)**

*(Si `php` n'est pas dans votre variable d'environnement PATH mais que XAMPP est installé)* :
```bash
C:\xampp\php\php.exe -S localhost:8000
```

### Méthode 2 : Avec XAMPP (Apache)
1. Copiez ou déplacez le dossier `php` dans le répertoire `htdocs` de XAMPP :
   `C:\xampp\htdocs\tp1\`
2. Lancez le **XAMPP Control Panel** et démarrez le service **Apache**.
3. Accédez à vos pages via votre navigateur à :
   👉 **[http://localhost/tp1](http://localhost/tp1)**

---

## 📝 Détail des Solutions Pédagogiques

### Exercice 1 : Pyramide de chiffres
Affiche pour chaque ligne $i$ (de 1 à 7) le chiffre $i$ répété $i$ fois grâce à deux boucles `for` imbriquées.

### Exercice 2 : Boucle while
Initialise une variable à 2, puis itère avec `while ($valeur < 30)`. À chaque tour, affiche la valeur et l'incrémente de 3. Une condition `if ($valeur == 15)` applique une balise `<mark>` et `<strong>`. *(Note : avec un pas de 3 depuis 2, les valeurs sont 2, 5, 8, 11, 14, 17, 20, 23, 26, 29 ; la condition est bien codée comme demandé).*

### Exercice 3 : Table matricielle 10x10
Génère une table HTML avec les produits $i \times j$ pour $1 \le i \le 10$ et $1 \le j \le 10$.

### Exercice 4 : Somme de deux nombres
Formulaire HTML qui transmet deux nombres via `$_POST` et affiche dynamiquement leur somme.

### Exercice 5 : Table de 3
Construit un tableau HTML `<table>` avec 5 colonnes : `3 | X | i | = | résultat`.

### Exercice 6 : Test de majorité
Formulaire permettant de tester tout âge : affiche "Majeur" si $\ge 18$ ans, sinon "Mineur".

### Exercice 7 : Menu switch
Menu déroulant permettant de choisir un chiffre (1 à 4) et affichant le descriptif complet de la formation sélectionnée via un bloc `switch ($choix)`.

### Exercice 8 : Moyenne de 1 à 10
Calcule la somme $1+2+...+10 = 55$ puis la moyenne ($5.5$) d'abord avec une boucle `for`, puis séparément avec une boucle `while`.

### Exercice 9 : Nombres pairs de 0 à 100
Génère la liste des nombres pairs vérifiant `($i % 2 == 0)` à travers trois implémentations distinctes : `for`, `while`, et `do...while`.

### Exercice 10 : Triangle d'étoiles
Double boucle imbriquée traçant 5 lignes de 1 à 5 étoiles `*`.

### Exercice 11 : Haut du sapin (cône sur 6 lignes)
Utilise une boucle externe sur 6 lignes et deux boucles internes :
- La première pour ajouter $6 - i$ espaces afin de centrer.
- La seconde pour afficher $2 \times i - 1$ étoiles (1, 3, 5, 7, 9, 11).
Le tout est encapsulé dans une balise `<pre>` pour garantir un alignement monospace parfait dans le navigateur.

