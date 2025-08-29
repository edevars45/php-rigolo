<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction <code>getNamespaces()</code></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Fonction <code>getNamespaces()</code></h1>

    <h2>Description</h2>
    <p>
        La fonction <code>getNamespaces()</code> liste les « espaces de noms » (namespaces) utilisés dans l’XML.<br>
        Un namespace = un préfixe (ex. <code>media</code>) lié à une adresse (URI), pour éviter les confusions.<br>
        Par défaut (<code>false</code>), elle regarde seulement l’élément courant (souvent la racine).<br>
        Avec <code>true</code>, elle parcourt tout le document et récupère tous les namespaces.<br>
        Elle renvoie un tableau associatif : clé = préfixe (vide si défaut), valeur = URI.
    </p>

    <h2>Exemple</h2>

    <h3>Code</h3>
    <pre>
&lt;?php
// 1) Créer un texte XML lisible (HEREDOC)
$xml = &lt;&lt;&lt;XML
&lt;?xml version="1.0" standalone="yes"?&gt;
&lt;people xmlns:p="http://example.org/ns" xmlns:t="http://example.org/test"&gt;
    &lt;p:person id="1"&gt;John Doe&lt;/p:person&gt;
    &lt;p:person id="2"&gt;Susie Q. Public&lt;/p:person&gt;
&lt;/people&gt;
XML;

// 2) Transformer le texte en objet SimpleXMLElement (plus simple à manipuler)
$sxe = new SimpleXMLElement($xml);

// 3) Récupérer tous les namespaces utilisés (récursif = true)
$namespaces = $sxe-&gt;getNamespaces(true);

// 4) Afficher le tableau des namespaces (debug/visualisation)
var_dump($namespaces);
?&gt;
    </pre>

    <h3>Résultat</h3>
    <p>
        <?php
        // 1) On crée le texte XML (HEREDOC) — écriture multi-lignes, facile à lire
        $xml = <<<XML
<?xml version="1.0" standalone="yes"?>
<people xmlns:p="http://example.org/ns" xmlns:t="http://example.org/test">
    <p:person id="1">John Doe</p:person>
    <p:person id="2">Susie Q. Public</p:person>
</people>
XML;

        // 2) On convertit le texte en objet SimpleXMLElement (manipulation aisée)
        $sxe = new SimpleXMLElement($xml);

        // 3) On récupère tous les namespaces utilisés, partout (récursif = true)
        $namespaces = $sxe->getNamespaces(true);

        // 4) On affiche l'XML pour contrôle visuel (échappé pour l'écran)
        echo '<pre>' . htmlspecialchars($xml) . '</pre>';

        // 5) On affiche le tableau des namespaces (clé = préfixe, valeur = URI)
        echo '<pre>';
        var_dump($namespaces);
        echo '</pre>';
        ?>
    </p>

    <h2>Infos supplementaires pour mieux comprendre :</h2>

    <p><code>$sxe</code> est une variable (le nom est libre) qui contient un objet SimpleXMLElement. <br>

Elle est créée à partir de la chaîne $xml : new SimpleXMLElement($xml).

Elle représente l’élément racine de ton XML (ici : <people>), et donc le document XML sous forme objet. <br>

Avec $sxe, tu peux parcourir et lire le XML : getNamespaces(), children(), attributes(), xpath(), getName(), etc.</p>

<h3>exemple simples:</h3>
 <pre>
&lt;?php
echo $sxe->getName();              // people
foreach ($sxe->children('p', true) as $person) {
    echo (string)$person;          // John Doe, Susie Q. Public
}

?&gt;
    </pre>

</body>

</html>
