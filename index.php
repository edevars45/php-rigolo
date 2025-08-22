<!DOCTYPE html> <!-- Indique que le document est en HTML5 -->

<html lang="fr"> <!-- Début du document HTML, langue définie en français -->

<head> <!-- En-tête du document (informations pour le navigateur) -->
    <meta charset="UTF-8" /> <!-- Encodage UTF-8 (gère accents et caractères spéciaux) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Assure compatibilité avec Internet Explorer -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!-- Rend la page responsive (mobile-friendly) -->
    <title>Liste de fonctions, classes, méthodes et instuctions PHP</title> <!-- Titre affiché dans l’onglet du navigateur -->
    <link rel="stylesheet" href="css/style.css"> <!-- Lien vers la feuille de style externe -->
</head>

<body> <!-- Début du contenu affiché sur la page -->
    <h1>Liste de fonctions, classes, méthodes et instuctions PHP</h1> <!-- Titre principal -->

    <ul> <!-- Liste non ordonnée -->
        <!-- Chaque élément de liste (<li>) contient un lien (<a>) vers une page expliquant une fonction/méthode PHP -->
        <li><a href="array.php">Fonction <code>array()</code></a></li> <!-- Crée un tableau -->
        <li><a href="array_keys.php">Fonction <code>array_keys()</code></a></li> <!-- Retourne toutes les clés d’un tableau -->
        <li><a href="array_column.php">Fonction <code>array_column()</code></a></li> <!-- Extrait une colonne d’un tableau multidimensionnel -->
        <li><a href="array_map.php">Fonction <code>array_map()</code></a></li> <!-- Applique une fonction sur chaque élément d’un tableau -->
        <li><a href="array_search.php">Fonction <code>array_search()</code></a></li> <!-- Recherche une valeur dans un tableau -->
        <li><a href="shuffle.php">Fonction <code>shuffle()</code></a></li> <!-- Mélange aléatoirement les éléments d’un tableau -->
        <li><a href="count.php">Fonction <code>count()</code></a></li> <!-- Compte le nombre d’éléments d’un tableau -->
        <li><a href="date.php">Fonction <code>date()</code></a></li> <!-- Retourne la date/heure au format choisi -->
        <li><a href="date_format.php">Fonction <code>date_format()</code></a></li> <!-- Formate un objet DateTime -->
        <li><a href="DateTime.php">Classe <code>DateTime()</code></a></li> <!-- Classe pour manipuler des objets date/heure -->
        <li><a href="diff.php">Méthode <code>DateTime::diff()</code></a></li> <!-- Calcule la différence entre deux dates -->
        <li><a href="echo.php">Instruction <code>echo</code></a></li> <!-- Affiche du texte ou des variables -->
        <li><a href="explode.php">Fonction <code>explode()</code></a></li> <!-- Découpe une chaîne en tableau -->
        <li><a href="PHP_EOL.php">Constante <code>PHP_EOL</code></a></li> <!-- Retour à la ligne selon le système -->
        <li><a href="fopen.php">Fonction <code>fopen()</code></a></li> <!-- Ouvre un fichier -->
        <li><a href="fread.php">Fonction <code>fread()</code></a></li> <!-- Lit le contenu d’un fichier -->
        <li><a href="fwrite.php">Fonction <code>fwrite()</code></a></li> <!-- Écrit dans un fichier -->
        <li><a href="file_put_contents.php">Fonction <code>file_put_contents()</code></a></li> <!-- Écrit directement dans un fichier -->
        <li><a href="filesize.php">Fonction <code>filesize()</code></a></li> <!-- Retourne la taille d’un fichier -->
        <li><a href="fclose.php">Fonction <code>fclose()</code></a></li> <!-- Ferme un fichier ouvert -->
        <li><a href="imagecreatefrompng.php">Fonction <code>imagecreatefrompng()</code></a></li> <!-- Crée une image à partir d’un PNG -->
        <li><a href="imagedestroy.php">Fonction <code>imagedestroy()</code></a></li> <!-- Libère la mémoire d’une image -->
        <li><a href="imagejpeg.php">Fonction <code>imagejpeg()</code></a></li> <!-- Enregistre une image en JPEG -->
        <li><a href="base64_decode.php">Fonction <code>base64_decode()</code></a></li> <!-- Décode une chaîne encodée en Base64 -->
        <li><a href="isset.php">Fonction <code>isset()</code></a></li> <!-- Vérifie si une variable est définie -->
        <li><a href="unset.php">Fonction <code>unset()</code></a></li> <!-- Détruit une variable -->
        <li><a href="list.php">Fonction <code>list()</code></a></li> <!-- Assigne des valeurs d’un tableau à des variables -->
        <li><a href="GET.php">Superglobale <code>$_GET[]</code></a></li> <!-- Contient les données passées dans l’URL -->
        <li><a href="POST.php">Superglobale <code>$_POST[]</code></a></li> <!-- Contient les données envoyées par formulaire -->
        <li><a href="SERVER_REQUEST_URI.php">Superglobale <code>$_SERVER['REQUEST_URI']</code></a></li> <!-- Retourne l’URI demandée -->
        <li><a href="SESSION.php">Superglobale <code>$_SESSION[]</code></a></li> <!-- Contient les données de session -->
        <li><a href="session_start.php">Fonction <code>session_start()</code></a></li> <!-- Démarre une session -->
        <li><a href="session_unset.php">Fonction <code>session_unset()</code></a></li> <!-- Supprime toutes les variables de session -->
        <li><a href="session_destroy.php">Fonction <code>session_destroy()</code></a></li> <!-- Détruit complètement une session -->
        <li><a href="rand.php">Fonction <code>rand()</code></a></li> <!-- Génère un nombre aléatoire -->
        <li><a href="mt_rand.php">Fonction <code>mt_rand()</code></a></li> <!-- Génère un nombre aléatoire plus performant -->
        <li><a href="json_decode.php">Fonction <code>json_decode()</code></a></li> <!-- Décode une chaîne JSON -->
        <li><a href="simplexml_load_file.php">Fonction <code>simplexml_load_file()</code></a></li> <!-- Charge un fichier XML -->
        <li><a href="children.php">Méthode <code>SimpleXMLElement::children()</code></a></li> <!-- Retourne les enfants d’un élément XML -->
        <li><a href="getNamespaces.php">Méthode <code>SimpleXMLElement::getNamespaces()</code></a></li> <!-- Retourne les espaces de noms d’un XML -->
        <li><a href="strtoupper.php">Fonction <code>strtoupper()</code></a></li> <!-- Convertit une chaîne en majuscules -->
        <li><a href="mb_strtoupper.php">Fonction <code>mb_strtoupper()</code></a></li> <!-- Convertit en majuscules (UTF-8, multi-octets) -->
        <li><a href="unlink.php">Fonction <code>unlink()</code></a></li> <!-- Supprime un fichier -->
    </ul> <!-- Fin de la liste -->
</body>

</html> <!-- Fin du document -->
