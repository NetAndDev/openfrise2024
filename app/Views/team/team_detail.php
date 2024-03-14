<!doctype html>
<html lang=fr>
<head>
    <title>Page de détail</title>
</head>
<body>
    <?php
        if (!empty($detail) && is_array($detail)){
            if(!empty($detail['name'])){
                echo '<p>Name : '.$detail['name'].'</p>';
            }
            else{
                    echo '<p>Name : Aucun name</p>';
            }


            if(!empty($detail['commentaire'])){
                echo '<p>Commentaire : '.$detail['comment'].'</p>';
            }
            else{
                    echo '<p>Commentaire : Aucun commentaire</p>';
            }

            echo '<p>Date de création : '.$detail['date_create'].'</p>';

            echo '<p>Dernière modification : '.$detail['date_update'].'</p>';
        }
        else{
            echo "Cet enregistrement n'existe pas dans la table Teams.";
        }
    ?>
</body>