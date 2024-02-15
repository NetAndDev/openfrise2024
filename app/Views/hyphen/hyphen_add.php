<!DOCTYPE html>
<html>
<head>
    <title>Ajout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">
</head>
<body>
<h1><strong>Ajout d'une coupure</strong></h1>
<a href="/hyphen">menu</a>
    <form action="<?= env('app.baseURL') ?>/hyphen/insert" method="POST">
        <label>Nom de la frise</label>
        <select name="idTimeline" id="idTimeline-select"></select>
        <label>Date de début</label>
        <input type="text" name="date_begin" required><br>
        <label>Date de fin</label>
        <input type="text" name="date_end" required><br>
        <label>Commentaire</label>
        <input type="text" name="comment"><br>
        <input type="submit" Value="Envoyer">
    </form>
</body>
<footer class="footer">
        <div>
            <p> Conception </p>
        </div>
    </footer>
</html>