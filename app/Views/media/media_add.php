<!doctype html>
<html lang=fr>
<head>
    <title>Ajouter un enregistrement</title>
</head>
<body>
    <h1>Ajouter un enregistrement</h1>
    <form action="#" method="post">
        <label>Titre</label><br>
        <input type="text" name="label"><br>
        <label>Sous-titre</label><br>
        <input type="text" name="sublabel"><br>
        <label>Légende</label><br>
        <input type="text" name="legend"><br>
        <label>Source</label><br>
        <input type="text" name="source"><br>
        <label>Média</label>
        <input type="file" name="filename" accept="image/* audio/* video/*" ><br>
        <label>Licence</label>
        <select name="code_licence">
            <option value="121">GPLv3</option>
            <option value="122">Copyright</option>
            <option value="123">Creative</option>
        </select><br>
        <label>Type</label>
        <select name="type_media">
            <option value="1">Image</option>
            <option value="2">Vidéo</option>
            <option value="3">Audio</option>
            <option value="4">Document</option>
        </select><br>
        <input type="submit" Value="Envoyer">
    </form>
</body>