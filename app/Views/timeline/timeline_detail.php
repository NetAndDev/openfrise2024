<!doctype html>
<html lang=fr>
<head>
<link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css?<?= uniqid() ?>">
    <title>Page de détail</title>
</head>
<body>

<ul>
        <li><a href="/timeline/list">Liste</a></li>
        <li><a href="/timeline/menu">Menu</a></li> 
        </ul>
<?php

 if (!empty($detail) && is_array($detail)){
    echo '<h1>Détail de : '.$detail['label'].'</h1>';
}

echo '<p>id timeline : '.$detail['id_timeline'].'</p>';

echo '<p>Libellé : '.$detail['label'].'</p>';

echo '<p>Sous-libellé : '.$detail['sublabel'].'</p>';

echo '<p>Date de début : '.$detail['date_begin'].'</p>';

echo '<p>Date de fin : '.$detail['date_end'].'</p>';


    if(!empty($detail['comment'])){
        echo '<p>Commentaire : '.$detail['comment'].'</p>';
    }
    else{
            echo '<p>Commentaire : Aucun commentaire</p>';
    }

echo '<p>Date de création : '.$detail['date_create'].'</p>';

echo '<p>Dernière modification : '.$detail['date_update'].'</p>';

?>
   </body>
</html>
