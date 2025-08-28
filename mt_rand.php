<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction <code>mt_rand</code></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Fonction <code>mt_rand()</code></h1>
    <h2>Decription</h2>
    <p><code>mt_rand()</code> sert à tirer un **nombre entier au hasard**. C’est une version **plus rapide** que
        <code>rand()</code> (algorithme Mersenne Twister). Sans rien entre les parenthèses, elle renvoie un nombre entre
        **0** et <code>mt_getrandmax()</code>. Avec des limites, écris <code>mt_rand(min, max)</code> : tu obtiens un
        entier **entre min et max, inclus** (ex. <code>mt_rand(5, 15)</code>). Attention ce n’est **pas** sûr pour la
        cryptographie : pour du hasard sécurisé, utilise <code>random_int()</code> ou <code>random_bytes()</code> (ou
        <code>Random\Randomizer</code> avec <code>Random\Engine\Secure</code>). Si <code>max</code> est **plus petit**
        que <code>min</code>, PHP lance une erreur (<code>ValueError</code>).
    </p>
</body>

<h2>Exemple</h2>

<h3>Code</h3>
<pre>
&lt;?php

echo mt_rand(), "\n";
echo mt_rand(), "\n";

echo mt_rand(5, 15), "\n";

?&gt;
    </pre>

<h3>résultat</h3>
<?php
echo mt_rand(), "\n";
echo mt_rand(), "\n";

echo mt_rand(5, 15), "\n";
?>

<h3> infos suplémentaires</h3>
<p>
    mt_rand() sans bornes → de 0 à mt_getrandmax(). <br>

    mt_rand(min, max) → de min à max (inclus). <br>

    Pour un hasard sécurisé (mots de passe, tokens) → random_int() (pas mt_rand()).
    $max = mt_getrandmax(); // ex: 2147483647 <br>

    $a = mt_rand(); // nombre aléatoire entre 0 et $max <br>
    $b = mt_rand(5, 15); // nombre aléatoire entre 5 et 15 (bornes incluses)</p>

</html>