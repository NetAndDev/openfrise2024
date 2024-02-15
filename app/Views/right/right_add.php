<!doctype html>
<html>
<head>
    <title>Attribuer des rôles</title>
</head>
<body>
<form action="<?= env('app.baseURL') ?>right/insert" method="POST">
    <h1>Attribuer des rôles</h1>
    <br>
    <label for="droit">Nouveau droit</label>
    <br>
    <input id="droit" type="text">
    <br><br>
    <label for="desc">Description du droit</label>
    <br>
    <textarea id="desc" type="text"></textarea>
    <br><br>
    <input type="submit" value="Enregistrer">
</form>
</body>
</html>