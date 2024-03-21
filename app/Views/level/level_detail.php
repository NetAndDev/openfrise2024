<?php

        if (!empty($detail) && is_array($detail)){
            echo '<h2>Détail de '.$detail['label'].'</h2>';

            if(!empty($detail['comment'])){
                echo '<p>Commentaire : '.$detail['comment'].'</p>';
            }
            else{
                    echo '<p>Commentaire : Aucun commentaire</p>';
            }

            echo '<p>Date de création : '.$detail['date_create'].'</p>';

            echo '<p>Dernière modification : '.$detail['date_update'].'</p>';
           
            echo'<br><a href="/menu ">Menu </a><br>';
            echo '<a href="update?id_level='.esc($detail['id_level']).'">Modifier</a><br>
                <a href="delete?id_level='.esc($detail['id_level']).'">Supprimer</a><br>';    
        }
        else{
            echo "Cet enregistrement n'existe pas dans la table Levels.";
            echo'<br><a href="/menu ">Menu </a>';
        }
    ?> 