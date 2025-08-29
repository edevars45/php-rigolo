<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction <code></code></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Fonction <code></code></h1>

    <h2>Description</h2>
    <p>
        mb_strtoupper() met tous les caractères alphabétiques d’une chaîne en MAJUSCULES, avec prise en charge complète
        d’Unicode.<br> Signature : <code>mb_strtoupper(string $string, ?string $encoding = null): string</code>.<br> Le
        paramètre <code>$encoding</code> précise l’encodage (UTF-8 recommandé) ; sinon l’encodage interne est
        utilisé.<br> Contrairement à <code>strtoupper()</code>, elle respecte les règles Unicode (accents, ç, alphabets
        non latins, etc.).<br> Retourne la chaîne convertie ; nécessite l’extension mbstring et fonctionne de PHP 4.3+ à
        PHP 8.
    </p>

    <h2>Exemple</h2>

    <h3>Code</h3>
    <pre>
&lt;?php
$str = "Marie A Un Petit Agneau Et Elle L'Aime BEAUCOUP.";
$str = mb_strtoupper($str);
echo $str; // MARIE A UN PETIT AGNEAU ET ELLE L'AIME BEAUCOUP.
?&gt;
    </pre>

    <h3>Résultat</h3>
    <p>
        <?php
$str = "Marie A Un Petit Agneau Et Elle L'Aime BEAUCOUP.";
$str = mb_strtoupper($str);
echo $str; // MARIE A UN PETIT AGNEAU ET ELLE L'AIME BEAUCOUP.
?>
    </p>
</body>

</html>