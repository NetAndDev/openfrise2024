<!doctype html>
<html lang=fr>
<head>
    <title>Ajouter un enregistrement</title>
    <link rel="stylesheet" href="<?=base_url();?>/styles/default/style.css">
</head>
<body>
                <h1>Modifier le média :</h1>
                <form action="<?= env('app.baseURL') ?>license/update" method="POST">
                <input type="text" name="code_license" value=<?=$detail['code_license']?> hidden>
                <label>Titre</label><br>
                <input type="text" name="title" value=<?=$detail['title']?> required><br>
                <label>Nom du Fichier</label><br>
                <input type="text" name="filename" value=<?=$detail['filename_ori']?> required><br>
                <label> Nom du Fichier original</label><br>
                <input type="file" name="filename_ori" accept="image/*, audio/*, video/*" required><br>
                <label>icone</label>
                <input type="text" name="icon" value=<?=$detail['icon']?> required><br>
                <label>icone_originale</label><br>
                <input type="file" name="icon_ori" accept="image/*, audio/*, video/*" required><br>
                <label>Commentaire</label>
                <input type="text" name="comment" value=<?=$detail['comment']?> required><br>
                <input type="submit" Value="Envoyer">
            </form>
        </body>