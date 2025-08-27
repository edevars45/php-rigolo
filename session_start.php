<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session_start</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>FONCTION <code>session_start()</code></h1>
    <h2>Description</h2>
    <p>
        La fonction <code>session_start</code><br>

        démarre une nouvelle session ou reprend une session existante.
        Elle permet d’utiliser la superglobale $_SESSION pour stocker et récupérer des informations entre plusieurs
        pages.
        Sans options → démarre une session classique. <br>

        Avec options → permet de modifier le comportement (ex : durée de vie du cookie, lecture seule…).
    </p>

    <pre>&lt;?php
            //Exemple
            session_start(array $options = []): bool
        ?&gt;</pre>

    <h2>Paramètres</h2>

    <p>
        options (facultatif) : tableau associatif qui peut remplacer certaines directives de configuration.

        Exemple :

        'cookie_lifetime' => 86400 → cookie valable 1 jour

        'read_and_close' => true → lit la session puis la ferme immédiatement

        Valeur de retour

        true si la session démarre correctement

        false sinon

    <h2>Notes importantes</h2>

    Toujours appeler <code>session_start()</code> avant tout affichage HTML (sinon erreur) <strong>“headers already
        sent”</strong>.

    La session utilise un cookie (par défaut PHPSESSID) pour identifier l’utilisateur.

    On peut aussi passer l’ID de session via l’URL (SID).
    </p>

    <!-- ===================== Exemple code===================== -->
    <pre>&lt;?php
            //Exemple
           session_start(); // Démarre la session

// On enregistre des données
$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

echo "Bienvenue à la page 1";
<a href="page2.php">Aller à la page 2</a>';

        ?&gt;</pre>

        
        
        <?php
session_start(); // Démarre la session

// On enregistre des données
$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();


?>
<h3>Résultat</h3>

Bienvenue à la page 1

</body>

</html>