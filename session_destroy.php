<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Fonction <code>session_destroy()</code></h1>
    <h2>Description</h2>
    <p>La fonction <code>session_destroy()</code> détruit toutes les données associées à la session courante. Cette
        fonction ne détruit pas les variables globales associées à la session, de même, elle ne détruit pas le cookie de
        session. Pour accéder à nouveau aux variables de session, la fonction session_start() doit être appelée de
        nouveau. <br>
        Note: Vous n'avez pas besoin d'appeler session_destroy() depuis le programme généralement. Nettoyer le tableau
        $_SESSION plutôt que de détruire les données de session.</p>
    Pour détruire complètement une session, l'identifiant de la session doit également être effacé. Si un cookie est
    utilisé pour propager l'identifiant de session (comportement par défaut), alors le cookie de session doit être
    effacé. La fonction setcookie() peut être utilisée pour cela.

    Quand session.use_strict_mode est activé. Vous n'avez pas besoin d'effacer le cookies d'ID de session obsolète car
    le module de session n'accepte pas les cookies d'ID de sessions quand il n'y a pas données associer avec ces ID de
    sessions et définira un nouvel cookie d'ID de session. Activer session.use_strict_mode est recommandé pour tous les
    sites.

    Avertissement
    La suppression immédiate d'une session peut causer des résultats inattendus. Quand il y a des requêtes simultanées,
    les autres connexions peuvent soudainement perdre des données de session. Par exemple des requêtes depuis JavaScript
    et/ou des requêtes depuis des liens URL.

    Bien que le module de session actuel n'accepte pas un cookie d'ID de session vide, mais la suppression immédiate de
    session peut provoquer un cookie d'ID de session vide à cause d'une condition de concurrence côté client
    (navigateur). Ceci provoquera la création de beaucoup d'ID de session inutile par le client.

    Pour éviter ceci, vous devez définir un horodatage à $_SESSION et refuser l'accès à toutes les dates ultérieures. Ou
    assurer vous que votre application n'a pas de requêtes simultanées. Ceci s'applique aussi à session_regenerate_id().

    Liste de paramètres ¶
    Cette fonction ne contient aucun paramètre.

    Valeurs de retour ¶
    
    Cette fonction retourne true en cas de succès ou false si une erreur survient.
    <br>
    <h2>Exemple 1 Destruction d'une session avec $_SESSION</h2>
   
    <h3>Code</h3>
        <pre>
&lt;?php
// Initialisation de la session.
// Si vous utilisez un autre nom
// session_name("autrenom")
session_start();

// Détruit toutes les variables de session
$_SESSION = array();

// Si vous voulez détruire complètement la session, effacez également
// le cookie de session.
// Note : cela détruira la session et pas seulement les données de session !
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalement, on détruit la session.
session_destroy();
?&gt;
    </pre>

     <h3>Résultat</h3>

    <?php
// Initialisation de la session.
// Si vous utilisez un autre nom
// session_name("autrenom")
session_start();

// Détruit toutes les variables de session
$_SESSION = array();

// Si vous voulez détruire complètement la session, effacez également
// le cookie de session.
// Note : cela détruira la session et pas seulement les données de session !
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finalement, on détruit la session.
session_destroy();
?>

</body>

</html>