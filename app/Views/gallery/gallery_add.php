<!doctype html>
<html lang="fr">
<head>
    <title>

    </title>
</head>
<body>

    <h1>Ajout d'une Galerie</h1>

    <form action="<?=env('app.baseURL') ?>gallery/insert" method="POST">
        <p><label for="label">Label :</label><br>
            <input id="label" name="label" type="text" required></p>
            
        <p><label for="sublabel">Sublabel :</label><br>
            <input id="sublabel" name="sublabel" type="text"></p>

        <p><label for="comment">Comment :</label><br>
            <input id="comment" name="comment" type="text"></p>

        <p><input name="submit" type="submit" value="Valider"></p>
    </form>

    <p><a href="<?= env('app.baseURL') ?>gallery/">Menu</a></p>

</body>
</html>