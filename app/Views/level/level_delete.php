<p><a href="<?= env('app.baseURL') ?>list/">Liste</a></p>
<?php
        if (!empty($level) && is_array($level)){
            echo "<h2>Supprimer le post : ".$detail['label']."</h2>";
?>
            <form action="<?= env('app.baseURL') ?>level/delete" method="POST">
<?php
            echo '<input type="text" name="id_level" value="'.$detail['id_level'].'" hidden>
                <label>Titre</label><br>
                <input type="text" name="label" value="'.$detail['label'].'" required><br>
                <input type="submit" Value="Supprimer">';
        }
?>