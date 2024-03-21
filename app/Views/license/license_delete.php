<!doctype html>
<html lang=fr>
<head>
    <title>Supprimer un enregistrement</title>
    <title>ajouter un fichier</title>
</head>
<body>
                <h1>Supprimer une licence</h1>
                <form action="<?= env('app.baseURL') ?>license/delete" method="POST">
                <label>Code de la Licence : </label><br>
                <input type="text" name="code_license" value=<?=$detail['code_license']?>>
                <input type="submit" Value="Envoyer">
            </form>
        </body>