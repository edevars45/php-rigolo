<!DOCTYPE html> 
<html lang="fr"> 

<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">
    <title>Fonction isset() (PHP)</title>
</head>

<body> 
    <h1>La Fonction <code>isset()</code> (PHP)</h1>

    <h2>Description</h2>
    <p>
        La fonction <code>isset()</code> permet de vérifier si une variable est définie et n’est pas <code>null</code>.  
        <br>
        Elle est très utilisée pour tester l’existence d’indices de tableau ou de valeurs passées via un formulaire.
    </p>

    <h2>MÉMO</h2>
    <ul>
        <li><code>isset($var)</code> : retourne <code>true</code> si la variable existe et n’est pas <code>null</code>.</li>
        <li>Retourne <code>false</code> si la variable n’existe pas ou si elle vaut <code>null</code>.</li>
        <li>Peut tester plusieurs variables en même temps : <code>isset($a, $b, $c)</code>.</li>
        <li> Une variable vide mais non <code>null</code> (ex: <code>""</code>, <code>0</code>, <code>false</code>) renvoie quand même <code>true</code>.</li>
    </ul>

    <hr>

    <h2>Exemple 1 : Test simple</h2>

    <h3>Code</h3>
    <pre>
&lt;?php
$prenom = "Alice";

if (isset($prenom)) {
    echo "La variable \$prenom est définie.";
} else {
    echo "La variable \$prenom n’existe pas.";
}
?&gt;
    </pre>

    <h3>Résultat</h3>
    <?php
    $prenom = "Alice";
    if (isset($prenom)) {
        echo "<p style='color:green'>La variable \$prenom est définie.</p>";
    } else {
        echo "<p style='color:red'>La variable \$prenom n’existe pas.</p>";
    }
    ?>

    <hr>

    <h2>Exemple 2 : Variable non définie ou null</h2>

    <h3>Code</h3>
    <pre>
&lt;?php
if (isset($inconnue)) {
    echo "Variable définie.";
} else {
    echo "Variable inexistante.";
}

$test = null;
echo isset($test) ? "Définie" : "Non définie";
?&gt;
    </pre>

    <h3>Résultat</h3>
    <?php
    if (isset($inconnue)) {
        echo "<p>Variable définie.</p>";
    } else {
        echo "<p>Variable inexistante.</p>";
    }

    $test = null;
    echo "<p>\$test = null ➝ " . (isset($test) ? "Définie" : "Non définie") . "</p>";
    ?>

    <hr>

    <h2>Exemple 3 : Plusieurs variables en même temps</h2>

    <h3>Code</h3>
    <pre>
&lt;?php
$a = 1;
$b = "Texte";

if (isset($a, $b)) {
    echo "Les deux variables sont définies.";
} else {
    echo "Au moins une variable manque.";
}
?&gt;
    </pre>

    <h3>Résultat</h3>
    <?php
    $a = 1;
    $b = "Texte";
    if (isset($a, $b)) {
        echo "<p style='color:green'>Les deux variables sont définies.</p>";
    } else {
        echo "<p style='color:red'>Au moins une variable manque.</p>";
    }
    ?>

    <hr>

    <h2>Exemple 4 : Utilisation avec un formulaire</h2>

    <h3>Code</h3>
    <pre>
&lt;form method="post"&gt;
    Nom : &lt;input type="text" name="nom"&gt;
    &lt;input type="submit" value="Envoyer"&gt;
&lt;/form&gt;

&lt;?php
if (isset($_POST["nom"])) {
    echo "Bonjour " . htmlspecialchars($_POST["nom"]);
}
?&gt;
    </pre>

    <h3>Résultat</h3>
    <form method="post">
        Nom : <input type="text" name="nom">
        <input type="submit" value="Envoyer">
    </form>
    <?php
    if (isset($_POST["nom"])) {
        echo "<p>Bonjour " . htmlspecialchars($_POST["nom"]) . "</p>";
    }
    ?>

</body>
</html>
