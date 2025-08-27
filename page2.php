<?php
// page2.php
session_start();
require_once __DIR__ . '/inc/logger.php';

// 1) tracer la visite
log_visit(['page' => 'page2']);

// 2) tracer (optionnel) ce qu'on lit
log_event('session_read', [
  'favcolor' => $_SESSION['favcolor'] ?? null,
  'animal'   => $_SESSION['animal']   ?? null,
  'time'     => $_SESSION['time']     ?? null,
]);

// 3) préparer des variables sûres pour l'affichage
$fav  = $_SESSION['favcolor'] ?? null;
$ani  = $_SESSION['animal']   ?? null;
$time = $_SESSION['time']     ?? null;

function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES); }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page 2 - Session</title>
</head>
<body>
  <h1> VOUS ÊTES SUR LA PAGE 2</h1>

  <?php if ($fav===null && $ani===null && $time===null): ?>
    <p style="color:#b00"> Aucune donnée de session. Ouvre d’abord <code>session_start.php</code>.</p>
  <?php endif; ?>

  <ul>
    <li>Couleur favorite : <?= $fav!==null ? e($fav) : 'non définie' ?></li>
    <li>Animal : <?= $ani!==null ? e($ani) : 'non défini' ?></li>
    <li>Heure de création :
      <?= $time!==null ? date('Y-m-d H:i:s', (int)$time) : 'non définie' ?>
    </li>
  </ul>

  <p>
    <a href="session_start.php">Retour à la page 1</a>
    &nbsp;|&nbsp;
    <a href="destroy.php">Réinitialiser la session</a>
  </p>
</body>
</html>
