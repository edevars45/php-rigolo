<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction <code>simplexml_load_file()</code></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Fonction <code>simplexml_load_file()</code></h1>
    <h2>Decription</h2>
    <p><code>simplexml_load_file()</code>Convertit le document XML filename
        en un objet de type SimpleXMLElement.
    </p>

    <h3>Liste de paramètres</h3>
</body>
<ul>
    <li>filename
        Chemin vers le fichier XML</li>
    <li>class_name
        Vous pouvez utiliser ce paramètre optionnel et ainsi, la fonction simplexml_load_file() retournera un objet de
        la classe spécifiée. Cette classe doit étendre la classe SimpleXMLElement.</li>
    <li>options
        Opération de 'OU' logique des constantes d'option libxml.</li>
    <li>namespace_or_prefix
        Préfixe ou l'URI de l'espace de noms.</li>
    <li>is_prefix
        true si namespace_or_prefix est un préfixe, false si c'est l'URI ; par défaut, false.</li>
</ul>

<h2>Exemple</h2>

<h3>Code</h3>
<pre>
&lt;?php
exemple description:
simplexml_load_file(
    string $filename,                          // « Où est le fichier ? » → le chemin du fichier XML à lire.
    ?string $class_name = SimpleXMLElement::class, // « Sous quelle forme d’objet je veux le résultat ? » → on garde la valeur par défaut.
    int $options = 0,                          // « Options de lecture (rares) » → 0 = aucune option spéciale.
    string $namespace_or_prefix = "",          // « Espace de noms XML (avancé) » → on laisse vide si on ne s’en sert pas.
    bool $is_prefix = false                    // « Le paramètre précédent est-il un préfixe ? » → false par défaut (avancé).
): SimpleXMLElement|false                      // Résultat : soit un objet SimpleXMLElement, soit false en cas d’échec.


exemple:
// Le fichier examples/book.xml contient un document XML avec un élément racine
// et au moins un élément /[racine]/title.

if (file_exists('examples/book.xml')) {
    $xml = simplexml_load_file('examples/book.xml');

    print_r($xml); // LIGNE 41 : « J’affiche tout l’objet pour voir sa structure et son contenu. »
} else {            // LIGNE 44 : « Si le fichier n’existe pas… »
    exit('Echec lors de l\'ouverture du fichier examples/test.xml.'); « J’arrête le script avec un message clair. »
}


?&gt;
    </pre>
<h3>résultat</h3>

<p> Ce script affichera, en cas de succès :</p>
<?php
// Le fichier examples/book.xml contient un document XML avec un élément racine
// et au moins un élément /[racine]/title.

if (file_exists('examples/book.xml')) {
    $xml = simplexml_load_file('examples/book.xml');

    print_r($xml);
} else {
    exit('Echec lors de l\'ouverture du fichier examples/test.xml.');
}
?>

<h3>infos</h3>
<p> file_exists($chemin) → “le fichier est là ?”

    simplexml_load_file($chemin) → “je lis le XML → j’obtiens un objet facile à parcourir”

    print_r($xml) → “montre-moi rapidement ce qu’il y a dedans”

    exit("message") → “stoppe tout et affiche l’erreur”</p>

</html>