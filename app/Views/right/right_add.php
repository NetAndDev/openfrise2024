<!doctype html>
<html>
<head>
    <title>Attribuer des rôles</title>
</head>
<body>
<form action="right_list.php" method="POST">
    <h1>Attribuer des rôles</h1>
    <br>
    <label>ID de l'utilisateur</label>
    <br>
    <input type="number">
    <br><br>
    <label>Rôle à attribuer</label>
    <br>
    <select>
        <option>Visiteur</option>
        <option>Utilisateur</option>
        <option>Propriétaire</option>
    </select>
    <br><br>
    <input type="submit" value="Enregistrer">
</form>
</body>
</html>