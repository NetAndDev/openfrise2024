<!doctype html>
<html>
<head>
    <title>Ajouter des rôles</title>
</head>
<body>
<form action="<?= env('app.baseURL') ?>right/insert" method="POST">
    <h1>Ajouter des rôles</h1>
    <br>
    <label for="label">Nouveau droit</label>
    <br>
    <input id="label" name="label" type="text">
    <br><br>
    <label for="comment">Description du droit</label>
    <br>
    <textarea id="comment" name="comment" type="text"></textarea>
    <br><br>
    <input type="submit" value="Enregistrer">
</form>
        <ul>
        <li><a href="/right/menu">Retour au menu</a></li>
        <li><a href="/right/list">Liste des rôles</a></li>
        </ul>

</body>
</html>
