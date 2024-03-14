<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une équipe</title>
</head>
<body>
    <h1>Supprimer une équipe par ID</h1>
    <form action="delete" method="POST">
        <label for="id_team_delete">ID de l'équipe à supprimer :</label>
        <input type="text" id="id_team_delete" name="id_team">
        <input type="submit" value="Supprimer">
    </form>
</body>
</html>
