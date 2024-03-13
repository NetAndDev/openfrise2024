<!doctype html>
<html lang=fr>
<head>
    <title>Ajouter un enregistrement</title>
</head>
<body>
        <?php
        if (!empty($media) && is_array($media)){
            echo "<h1>Modifier le média : ".$detail['label']."</h1>";
            echo "<form action='https://ci4.dirila.futaie.me/media/update' method='POST'>";
            echo '<input type="text" name="id_media" value="'.$detail['id_media'].'" hidden>
                <label>Titre</label><br>
                <input type="text" name="label" value="'.$detail['label'].'" required><br>
                <label>Sous-titre</label><br>
                <input type="text" name="sublabel" value="'.$detail['sublabel'].'" required><br>
                <label>Légende</label><br>
                <input type="text" name="legend" value="'.$detail['legend'].'" required><br>
                <label>Source</label><br>
                <input type="text" name="source" value="'.$detail['source'].'" required><br>
                <label>Média</label>
                <input type="file" name="filename_ori" accept="image/*, audio/*, video/*" required><br>
                <label>Licence</label>
                <select name="code_license">
                    <option value=121>GPLv3</option>
                    <option value=122>Copyright</option>
                    <option value=123>Creative</option>
                </select><br>
                <label>Type</label>
                <select name="code_type_media">
                    <option value="1">Image</option>
                    <option value="2">Vidéo</option>
                    <option value="3">Audio</option>
                    <option value="4">Document</option>
                </select><br>
                <label>Commentaire</label><br>
                <input type="text" name="comment" value="'.$detail['comment'].'" required><br>
                <input type="submit" Value="Envoyer">';
        }
        else{
            echo "Aucun média sélectionné.";
        }
        ?>
            </form>
        </body>
