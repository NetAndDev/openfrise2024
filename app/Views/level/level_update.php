<?php
        if (!empty($level) && is_array($level)){
            echo "<h2>Modifier le post : ".$detail['label']."</h2>";
            echo '<form action="update" method="POST">';
            echo '<input type="text" name="id_level" value="'.$detail['id_level'].'" hidden>
                <label>Titre</label><br>
                <input type="text" name="label" value="'.$detail['label'].'" required><br>
                <label>Commentaire</label><br>
                <input type="text" name="comment" value="'.$detail['comment'].'" ><br>
                <input type="submit" Value="Modifier">';
        }
        else{
            echo "Aucun média sélectionné.";
        }
        ?>  