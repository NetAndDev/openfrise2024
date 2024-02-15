<!doctype html>
<html lang=fr>
<head>
    <title>Page de détail</title>
</head>
<body>
    <?php
        if (!empty($detail) && is_array($detail)){
            echo '<h1>Détail de '.$detail['label'].'</h1>';
            echo '<p>Sous-titre : '.$detail['sublabel'].'</p><br>';
        }
    ?>
</body>