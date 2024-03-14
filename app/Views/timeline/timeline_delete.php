<!doctype html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css">
    <title>Supprimer une frise</title>
</head>
<body>
    <?php
    if (!empty($timeline) && is_array($timeline)) {
        echo "<h1>Supprimer la frise : ".$detail['label']."</h1>";
        echo "<form action='https://ci4.amiarr.futaie.me/timeline/delete' method='POST'>";
        echo '<input type="text" name="id_timeline" value="'.$detail['id_timeline'].'" hidden>';

        echo '<p>Êtes-vous sûr de vouloir supprimer cette frise ?</p>';

        echo '<input type="submit" value="Supprimer">';
    } else {
        echo "Aucune frise sélectionnée !";  
    }
    ?>
    </form>
</body>
</html>