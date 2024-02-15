<!doctype html>
<html lang=fr>
<head>
    <title>Page de détail</title>
</head>
<body>
    <?php
        if (!empty($detail) && is_array($detail)){
            echo '<h1>Détail de '.$detail'label'].'</h1>';

            if(!empty($detail['sublabel'])){
                echo '<p>Sous-titre : '.$detail['sublabel'].'</p>';
            }
            else{
                echo '<p>Sous-titre : Aucun</p>';
            }

            if(!empty($detail['legend'])){
                echo '<p>Légende : '.$detail['legend'].'</p>';;
            }
            else{
                echo '<p>Légende : Aucune</p>';
            }

            if(!empty($detail['source'])){
                echo '<p>Source : <a href="'.$detail['source'].'">'.$detail['source'].'</a></p>';
            }
            else{
                echo '<p>Source : Aucune source</p>';
            }

            echo '<p>Nom de fichier original : '.$detail['filename_ori'].'</p>';

            echo '<p>Nom de fichier : '.$detail['filename'].'</p>';

            if(!empty($detail['comment'])){
                echo '<p>Commentaire : '.$detail['comment'].'</p>';
            }
            else{
                    echo '<p>Commentaire : Aucun commentaire</p>';
            }

            echo '<p>Date de création : '.$detail['date_create'].'</p>';

            echo '<p>Dernière modification : '.$detail['date_update'].'</p>';
        }
        else{
            echo "Cet enregistrement n'existe pas dans la table Medias.";
        }
    ?>
</body>