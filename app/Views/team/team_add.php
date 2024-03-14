<!DOCTYPE html>
<html lang="fr">
<head>
    <title>ADD</title>
</head>
<body>
    <h1>Formulaire</h1>
    <form action="insert" method="POST">

         <label for="id_team">Id équipe</label>
        <input type="text" id="id_team" name="id_team"><br>

        <label for="nomEquipe">Nom équipe</label>
        <input type="text" id="nomEquipe" name="name"><br>

        <label for="commentaire">Commentaire</label>
        <input type="text" id="commentaire" name="comment"><br>

        <label for="datecrea">Date de création</label>
        <input type="date" id="datecrea" name="date_create"><br>

        <label for="datemodif">Date de modification</label>
        <input type="date" id="datemodif" name="date_update"><br>

        <input type="submit" value="Envoyer">

    </form>
    <p>ADD</p>
    <a href="/team/">Retourner à team</a>
</body>
</html>
