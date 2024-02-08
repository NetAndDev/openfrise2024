<!DOCTYPE html>
<html>
<head>
<title>LISTE</title>

</head>
<body>

<a href="/event/">Retourner</a>
<?php

echo '<br>======================<br>';
echo '<table style="border:1px solid" ><tr style="border:1px">';

echo '</tr></table>';

?>
test 123:
<p><?= esc($mael) ?></p>
test where id_timeline = 24:
<p><?= esc(print_r($test)) ?></p>
test pour récup les noms des champs sans précisions
<p><?= esc(print_r($f)) ?></p>
test récup nom champs avec param
<p><?= esc(print_r($F)) ?></p>
test remplacemet de la fonction "m" (sans query())
<p><?= esc(print_r($ff)) ?></p>
test récup tt val champ w/ param
<p><?= esc(print_r($foofighters)) ?></p>
</body>
</html>