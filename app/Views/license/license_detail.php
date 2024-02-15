<!doctype html>
<html lang=fr>
<head>
    <title>Page de détail</title>
</head>
<body>
    <?php
        if (!empty($detail) && is_array($detail)){
            echo '<h1>Détail de '.$detail['title'].'</h1>';
            echo '<p>la license numéro : '.$detail['codelicense'].'</p><br>';
        }
    ?>
</body>