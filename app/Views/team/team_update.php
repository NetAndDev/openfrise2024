<!DOCTYPE html>
<html lang="fr">
<head>
    <title>UPDATE</title>
</head>
<body>
    <h1>Formulaire de mise à jour</h1>
    <form action="/team/update" method="POST">

        <label for="nomEquipe">Nom de l'équipe à mettre à jour</label>
        <input type="text" id="nomEquipe" name="name"><br>

        <label for="nouveauNomEquipe">Nouveau nom de l'équipe</label>
        <input type="text" id="nouveauNomEquipe" name="name"><br>

        <label for="commentaire">Nouveau commentaire</label>
        <input type="text" id="commentaire" name="comment"><br>

        <label for="datecrea">Nouvelle date de création</label>
        <input type="date" id="datecrea" name="date_create"><br>

        <label for="datemodif">Nouvelle date de modification</label>
        <input type="date" id="datemodif" name="date_update"><br>

        <input type="submit" value="Mettre à jour">

    </form>
    <p>UPDATE</p>
    <a href="/team/">Retourner à team</a>
</body>
</html>
