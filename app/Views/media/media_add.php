<!doctype html>
<html lang=fr>
<head>
    <title>Ajouter un enregistrement</title>
    <link rel="stylesheet" href="<?=base_url();?>/styles/default/style.css">
</head>
<body>
    <h1>Ajouter un enregistrement</h1>
    <form action="<?= env('app.baseURL') ?>media/insert" method="POST">
        <label>Titre</label><br>
        <input type="text" name="label" required><br>
        <label>Sous-titre</label><br>
        <input type="text" name="sublabel" required><br>
        <label>Légende</label><br>
        <input type="text" name="legend" required><br>
        <label>Source</label><br>
        <input type="text" name="source" required><br>
        <label>Média</label>
        <input type="file" name="filename_ori" accept="image/*, audio/*, video/*" required><br>
        <label>Licence</label>
        <select name="code_license">
            <option value=121>GPLv3</option>
            <option value=122>Copyright</option>
            <option value=123>Creative</option>
        </select><br>
        <label>Type</label>
        <select name="code_type_media">
            <option value="1">Image</option>
            <option value="2">Vidéo</option>
            <option value="3">Audio</option>
            <option value="4">Document</option>
        </select><br>
        <label>Commentaire</label><br>
        <input type="text" name="comment" required><br>
        <input type="submit" Value="Envoyer">
    </form>
</body>