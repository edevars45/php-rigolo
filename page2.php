<?php
session_start();

// (optionnel) logger
if (file_exists(__DIR__ . '/inc/logger.php')) {
  require __DIR__ . '/inc/logger.php';
  log_event('page_view', ['page' => 'page2']);
  log_event('session_read', [
    'favcolor' => $_SESSION['favcolor'] ?? null,
    'animal'   => $_SESSION['animal'] ?? null,
    'time'     => $_SESSION['time']   ?? null,
  ]);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page 2</title>
</head>
<body>
  <h1>📄 VOUS ÊTES SUR LA PAGE 2</h1>
  <ul>
    <li>Couleur favorite : <?= htmlspecialchars($_SESSION['favcolor'] ?? '—', ENT_QUOTES) ?></li>
    <li>Animal : <?= htmlspecialchars($_SESSION['animal'] ?? '—', ENT_QUOTES) ?></li>
    <li>Heure de création : <?= isset($_SESSION['time']) ? date('Y-m-d H:i:s', $_SESSION['time']) : '—' ?></li>
  </ul>

  <a href="session_start.php">⬅️ Retour à la page 1</a>
</body>
</html>
