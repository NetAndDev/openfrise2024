<!doctype html>
<html lang=fr>
<head>
    <title>Ajouter un enregistrement</title>
</head>
<body>
        <?php
        if (!empty($license) && is_array($license)){
            echo "<h1>Modifier la license : ".$detail['label']."</h1>";
            echo "<form action='https://ci4.championr.futaie.me/license/update' method='POST'>";
            echo '<input type="text" name="code_license" value="'.$detail['code_license'].'" hidden>
                <label>Titre</label><br>
                <input type="text" name="title" value="'.$detail['title'].'" required><br>
                <label>nom du fichier</label><br>
                <input type="text" name="filename" value="'.$detail['filename'].'" required><br>
                <label>selectionnez le fichier</label>
                <input type="file" name="filename_ori" accept="image/*, audio/*, video/*" required><br>
                <label>nom original du fichier</label><br>
                <input type="text" name="filename_ori" value="'.$detail['filename_ori'].'" required><br>
                <label>icone/label><br>
                <input type="text" name="icon" value="'.$detail['icon'].'" required><br>
                <label>icone/label><br>
                <input type="text" name="icon_ori" value="'.$detail['icon_ori'].'" required><br>
                <label>Commentaire</label><br>
                 <input type="text" name="comment" value="'.$detail['comment'].'" required><br>
                <input type="submit" Value="Envoyer">';
        }
        else{
            echo "Aucune licence sélectionné.";
        }
        ?>
            </form>
        </body>