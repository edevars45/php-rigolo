<?php
// Page 1 — session_start.php
session_start();
require_once __DIR__ . '/inc/logger.php';   // trace (privé)
log_visit(['page' => 'session_start']);

// Données de session utilisées par la page 2
$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Session_start</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <h1>FONCTION <code>session_start()</code></h1>

  <h2>Description</h2>
  <p>
    La fonction <code>session_start()</code><br>
    démarre une nouvelle session ou reprend une session existante.
    Elle permet d’utiliser la superglobale <code>$_SESSION</code> pour stocker et récupérer des informations entre plusieurs pages.
    Sans options → démarre une session classique. <br>
    Avec options → permet de modifier le comportement (ex : durée de vie du cookie, lecture seule…).
  </p>

  <h2>Syntaxe</h2>
  <pre>&lt;?php
session_start(array $options = []): bool
?&gt;</pre>

  <h2>Paramètres</h2>
  <p>
    <code>options</code> (facultatif) : tableau associatif qui peut remplacer certaines directives de configuration.
  </p>
  <ul>
    <li><code>'cookie_lifetime' =&gt; 86400</code> → cookie valable 1 jour</li>
    <li><code>'read_and_close' =&gt; true</code> → lit la session puis la ferme immédiatement</li>
  </ul>
  <p>
    Valeur de retour : <code>true</code> si la session démarre correctement, <code>false</code> sinon.
  </p>

  <h2>Notes importantes</h2>
  <ul>
    <li>Toujours appeler <code>session_start()</code> <strong>avant tout HTML</strong> (sinon “headers already sent”).</li>
    <li>La session utilise un cookie (par défaut <code>PHPSESSID</code>).</li>
    <li>On peut aussi passer l’ID de session via l’URL (constante <code>SID</code>).</li>
  </ul>

  <!-- ===================== Exemple code (affiché) ===================== -->
  <h2>Exemple (code)</h2>
  <pre>&lt;?php
session_start(); // Démarre la session

// On enregistre des données
$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

echo "Bienvenue à la page 1";
echo '&lt;br&gt;&lt;a href="page2.php"&gt;Aller à la page 2&lt;/a&gt;';
?&gt;</pre>

  <h3>Résultat</h3>
  <p>Bienvenue à la page 1 </p>
  <p><a href="page2.php">Aller à la page 2</a></p>
</body>
</html>
