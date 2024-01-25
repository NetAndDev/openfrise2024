<!doctype html>
<html>
<head>
</head>
<body>
    <h1>Ajouter un enregistrement</h1>
    <form action="#" method="post">
        <label>id_media</label><br>
        <input type="texte" name="id_media"><br>
        <label>label</label><br>
        <input type="texte" name="label"><br>
        <label>sublabel</label><br>
        <input type="texte" name="sublabel"><br>
        <label>legend</label><br>
        <input type="texte" name="legend"><br>
        <label>source</label><br>
        <input type="texte" name="source"><br>
        <label>filename</label><br>
        <input type="texte" name="filename"><br>
        <label>filename_ori</label><br>
        <input type="texte" name="filename_ori"><br>
        <label>licence</label>
        <select name="code_licence"><br>
            <option value="121">GPLv3</option>
            <option value="122">Copyright</option>
            <option value="123">Creative</option>
        </select><br>
        <label>licence</label>
        <select name="type_media"><br>
            <option value="1">Image</option>
            <option value="2">Vidéo</option>
            <option value="3">Audio</option>
            <option value="4">Document</option>
        </select><br>
        <input type="submit" Value="Envoyer">
    </form>
</body>
