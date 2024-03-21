<!doctype html>
<html lang=fr>
<head>
    <title>Supprimer un enregistrement</title>
    <link rel="stylesheet" href="<?=base_url();?>/styles/default/style.css">
</head>
<body>
                <h1>Supprimer un média</h1>
                <form action="<?= env('app.baseURL') ?>license/delete_success" method="POST">
                <label>code de la licence: </label><br>
                <input type="text" name="code_license" value=<?=$detail['code_license']?>>
                <input type="submit" Value="Envoyer">
            </form>
        </body>