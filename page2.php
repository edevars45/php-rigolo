<?php
// page2.php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page 2 - Session</title>
</head>
<body>
  <h1>Page 2</h1>
  <p>Couleur favorite : <?= $_SESSION['favcolor'] ?? 'non définie' ?></p>
  <p>Animal : <?= $_SESSION['animal'] ?? 'non défini' ?></p>
  <p>Heure de création : <?= isset($_SESSION['time']) ? date('Y-m-d H:i:s', $_SESSION['time']) : 'non définie' ?></p>

 <a href="session_start.php">Retour à la page 1</a>

</body>
</html>
