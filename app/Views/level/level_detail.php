<?php

        
            echo '<h1>Détail de '.$detail['label'].'</h1>';

            if(!empty($detail['comment'])){
                echo '<p>Commentaire : '.$detail['comment'].'</p>';
            }
            else{
                    echo '<p>Commentaire : Aucun commentaire</p>';
            }

            echo '<p>Date de création : '.$detail['date_create'].'</p>';

            echo '<p>Dernière modification : '.$detail['date_update'].'</p>';
        
            echo "Cet enregistrement n'existe pas dans la table Levels.";
            echo'<br><a href="/menu ">Menu </a><br>';
        
    ?> 