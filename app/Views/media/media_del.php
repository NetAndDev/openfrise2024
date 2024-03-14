<!doctype html>
<html lang=fr>
<head>
    <title>Supprimer un enregistrement</title>
    <link rel="stylesheet" href="<?=base_url();?>/styles/default/style.css">
</head>
<body>
                <h1>Supprimer un média</h1>
                <form action="<?= env('app.baseURL') ?>media/delete" method="POST">
                <label>Identifiant du média : </label><br>
                <input type="text" name="id_media" value=<?=$detail['id_media']?>>
                <input type="submit" Value="Envoyer">
            </form>
        </body>
