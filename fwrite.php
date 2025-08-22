<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Fonction <code>fwrite()</code> (PHP)</title>
</head>

<body>
    <h1>La Fonction <code>fwrite()</code> (PHP)</h1>

    <h2>Description</h2>
    <p>
        La fonction <code>fwrite()</code> écrit une chaîne de caractères dans un fichier ouvert avec <code>fopen()</code>.
        <br>
        Elle retourne le nombre d’octets écrits ou <code>false</code> en cas d’échec.
    </p>

    <h2>MÉMO</h2>
    <ul>
        <li><code>fwrite($handle, $string)</code> : écrit la chaîne <code>$string</code> dans le fichier.</li>
        <li>Retourne le nombre d’octets écrits ou <code>false</code> si une erreur survient.</li>
        <li>Si le fichier est ouvert en mode ajout (<code>'a'</code>), le texte est ajouté à la fin.</li>
        <li>Important : toujours utiliser <code>fclose()</code> pour libérer la ressource.</li>
    </ul>

    <hr>

    <h2>Exemple 1 : Écriture simple</h2>

    <h3>Code</h3>
    <pre>
&lt;?php
$fichier = fopen("demo.txt", "w");
fwrite($fichier, "Bonjour fwrite() !");
fclose($fichier);
?&gt;
    </pre>

    <h3>Résultat</h3>
    <?php
    $file1 = __DIR__ . "/demo_fwrite1.txt";
    $fichier = fopen($file1, "w");
    fwrite($fichier, "Bonjour fwrite() !");
    fclose($fichier);

    echo "<pre>" . htmlspecialchars(file_get_contents($file1)) . "</pre>";
    ?>

    <hr>

    <h2>Exemple 2 : Ajouter du texte en mode 'a'</h2>

    <h3>Code</h3>
    <pre>
&lt;?php
$fichier = fopen("demo.txt", "a");
fwrite($fichier, "Nouvelle ligne ajoutée\n");
fclose($fichier);
?&gt;
    </pre>

    <h3>Résultat</h3>
    <?php
    $file2 = __DIR__ . "/demo_fwrite2.txt";
    // on s'assure qu'il existe
    file_put_contents($file2, "Première ligne\n");

    $fichier = fopen($file2, "a");
    fwrite($fichier, "Nouvelle ligne ajoutée\n");
    fclose($fichier);

    echo "<pre>" . htmlspecialchars(file_get_contents($file2)) . "</pre>";
    ?>

    <hr>

    <h2>Exemple 3 : Écriture partielle</h2>

    <h3>Code</h3>
    <pre>
&lt;?php
$texte = "ABCDEFGH";
$fichier = fopen("demo.txt", "w");
fwrite($fichier, $texte, 4); // n'écrit que 4 caractères
fclose($fichier);
?&gt;
    </pre>

    <h3>Résultat</h3>
    <?php
    $file3 = __DIR__ . "/demo_fwrite3.txt";
    $texte = "ABCDEFGH";
    $fichier = fopen($file3, "w");
    fwrite($fichier, $texte, 4); // écrit seulement "ABCD"
    fclose($fichier);

    echo "<pre>" . htmlspecialchars(file_get_contents($file3)) . "</pre>";
    ?>

</body>
</html>
