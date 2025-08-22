<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Fonction imagedestroy() (PHP)</title>
</head>

<body>
    <h1>La Fonction <code>imagedestroy()</code> (PHP)</h1>

    <h2>Description</h2>
    <p>
        La fonction <code>imagedestroy()</code> libère la mémoire associée à une image créée ou chargée
        avec les fonctions GD (<code>imagecreatefrompng()</code>, <code>imagecreatetruecolor()</code>, etc.).  
        <br>
        Cela n’efface pas le fichier image du disque : seule l’image en mémoire est détruite.
    </p>

    <h2>MÉMO</h2>
    <ul>
        <li><code>imagedestroy($img)</code> : libère la ressource/objet image en mémoire.</li>
        <li>Retourne <code>true</code> en cas de succès ou <code>false</code> en cas d’échec.</li>
        <li>À utiliser dès qu’on n’a plus besoin d’une image pour économiser la mémoire.</li>
        <li>Ne supprime pas le fichier du disque (utiliser <code>unlink()</code> pour ça).</li>
    </ul>

    <hr>

    <h2>Exemple 1 : Libérer une image après usage</h2>
    <pre>
&lt;?php
$img = imagecreatetruecolor(100, 100);   // Crée une image en mémoire
$vert = imagecolorallocate($img, 0, 255, 0);
imagefill($img, 0, 0, $vert);            // Remplit l'image de vert
imagepng($img, "vert.png");              // Sauvegarde sur disque
imagedestroy($img);                      // Libère la mémoire
?&gt;
    </pre>
    <?php
    $file1 = __DIR__ . "/vert.png";
    $img = imagecreatetruecolor(100, 100);
    $vert = imagecolorallocate($img, 0, 255, 0);
    imagefill($img, 0, 0, $vert);
    imagepng($img, $file1);
    imagedestroy($img);
    echo "<p>Image <code>vert.png</code> créée puis détruite de la mémoire.</p>";
    if (is_file($file1)) {
        echo '<img src="vert.png" alt="Carré vert" width="100" height="100">';
    }
    ?>

    <hr>

    <h2>Exemple 2 : Plusieurs images et destruction</h2>
    <pre>
&lt;?php
$img1 = imagecreatetruecolor(50, 50);
$img2 = imagecreatetruecolor(50, 50);

imagedestroy($img1); // Libère seulement la première
// $img2 est encore utilisable ici
?&gt;
    </pre>
    <?php
    $img1 = imagecreatetruecolor(50, 50);
    $img2 = imagecreatetruecolor(50, 50);
    $ok = imagedestroy($img1);
    echo "<p>imagedestroy(\$img1) → " . ($ok ? "succès" : "échec") . "</p>";
    echo "<p>\$img2 est encore utilisable tant qu'on ne l'a pas détruite.</p>";
    imagedestroy($img2);
    ?>

    <hr>

    <h2>Exemple 3 : Attention, ce n’est pas une suppression de fichier</h2>
    <pre>
&lt;?php
$img = imagecreatetruecolor(100, 100);
imagepng($img, "exemple.png"); // fichier créé
imagedestroy($img);            // libère la mémoire
// "exemple.png" est toujours présent sur le disque
?&gt;
    </pre>
    <?php
    $file3 = __DIR__ . "/exemple.png";
    $img = imagecreatetruecolor(100, 100);
    imagepng($img, $file3);
    imagedestroy($img);
    if (is_file($file3)) {
        echo "<p><code>exemple.png</code> existe encore sur le disque après imagedestroy().</p>";
        echo '<img src="exemple.png" alt="Exemple image" width="100" height="100">';
    }
    ?>

</body>
</html>
