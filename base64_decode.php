<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fonction base64_decode() — Exemples clairs</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>

  <h1>Fonction <code>base64_decode()</code></h1>
  <p><strong>Idée clé :</strong> <code>base64_decode()</code> fait l’inverse de <code>base64_encode()</code> → il
    transforme une chaîne Base64 en texte/données utiles.</p>

  <!-- ===================== Exemple 1 ===================== -->
  <h2>Exemple 1 — Chaîne simple</h2>
  <h3>Code</h3>
  <pre>&lt;?php
// 1) Je prépare une chaîne encodée en Base64 ("
Ceci est une chaîne codée")
$str = 'Q2VjaSBlc3QgdW5lIGNoYcOubmUgY29kw6ll';

// 2) Je décode la chaîne Base64 → j'obtiens le texte lisible
$decoded = base64_decode($str);

// 3) J'affiche le résultat
echo $decoded;
?&gt;</pre>
  <h3>Résultat</h3>
  <p class="result">This is an encoded string</p>

  <!-- ===================== Exemple 2 ===================== -->
  <h2>Exemple 2 — UTF-8 (accents)</h2>
  <h3>Code</h3>
  <pre>&lt;?php
// 1) Chaîne Base64 qui représente le texte "Ceci est une chaîne encodée" (avec accents)
$fr = 'Q2VjaSBlc3QgdW5lIGNoYcOubmUgZW5jb2TDqWU=';

// 2) Je décode en UTF-8 (par défaut) → j'obtiens la phrase avec accents
$txt = base64_decode($fr);

// 3) J'affiche la phrase décodée
echo $txt;
?&gt;</pre>
  <h3>Résultat</h3>
  <p class="result">Ceci est une chaîne encodée</p>

  <!-- ===================== Exemple 3 ===================== -->
  <h2>Exemple 3 — Mode strict (validation)</h2>
  <h3>Code</h3>
  <pre>&lt;?php
// 1) Chaîne invalide (contient un caractère interdit '$')
$invalide = 'VGhpcyBpcyBhbiBlbmNvZGVkIHN0cmluZw$';  // contient un '$' => invalide

// 2) Je demande un décodage "strict" (deuxième argument = true)
//    → si la chaîne contient un caractère interdit, la fonction renvoie false
$resultat = base64_decode($invalide, true); // strict = true => valide la chaîne

// 3) J'inspecte le résultat pour voir si c'est false
var_dump($resultat);
?&gt;</pre>
  <h3>Résultat</h3>
  <p class="result">bool(false)</p>

  <!-- ===================== Exemple 4 ===================== -->
  <h2>Exemple 4 — Afficher une image encodée (HTML)</h2>
  <h3>Code</h3>
  <pre>&lt;!-- 1) Balise &lt;img&gt; dont la source est une "data URL" en Base64 --&gt;
&lt;img
  alt="carré"                                    &lt;!-- texte alternatif si l'image ne s'affiche pas --&gt;
  src="data:image/png;base64,
iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAH0lEQVQoU2NkYGD4z0ABYBw1gGE0GJgGJgYQyGAAAO4lB5q0mI9QAAAABJRU5ErkJggg=="  &lt;!-- données encodées --&gt;
/&gt;</pre>
  <h3>Résultat</h3>
  <p class="result">
    <!-- Affichage réel : petit carré PNG 10×10 -->
    <img alt="carré" width="20" height="20"
      src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAH0lEQVQoU2NkYGD4z0ABYBw1gGE0GJgGJgYQyGAAAO4lB5q0mI9QAAAABJRU5ErkJggg==" />
    &nbsp; (petit PNG 10×10)
  </p>

  <!-- ===================== Exemple 5 ===================== -->
  <h2>Exemple 5 — (Serveur) Décoder et sauvegarder une image</h2>
  <h3>Code</h3>
  <pre>&lt;?php
// 1) Je reçois une "data URL" (image PNG encodée en Base64)
$dataUrl = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAH0lEQVQoU2NkYGD4z0ABYBw1gGE0GJgGJgYQyGAAAO4lB5q0mI9QAAAABJRU5ErkJggg==';

// 2) Je retire le préfixe "data:image/...;base64," pour ne garder que les données
$base64 = preg_replace('#^data:image/\\w+;base64,#i', '', $dataUrl);

// 3) Je décode en mode strict → si c'est invalide, je veux false
$bin = base64_decode($base64, true);

// 4) Je vérifie que le décodage a bien réussi (sinon, j'arrête avec un message)
if ($bin === false) {
  die('Chaîne base64 invalide');
}

// 5) J'écris le binaire dans un fichier image sur le serveur
file_put_contents('output.png', $bin);

// 6) J'affiche un message de succès
echo 'OK → fichier output.png créé';
?&gt;</pre>
  <h3>Résultat</h3>
  <p class="result">OK → fichier output.png créé</p>

</body>

</html>