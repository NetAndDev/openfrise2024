<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>BDD TYPES MEDIAS</title>
  <link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css">

  
</head>
<body>
    <p><a href="<?= env('app.baseURL') ?>type_media/">Menu</a></p>

   
            <h1>Ajout d'un Type Média</h1>

<form action="<?= env('app.baseURL') ?>type_media/insert" method="POST" > <p>





<h1>Ajouter votre enregistrement</h1>

<label>Code type média</label><br>
<input type="text" name="code_type_media">

<label>label</label><br>
<input type="text" name="label">

<label>icon</label><br>
<input type="file" name="parcourir" id="parcourir" accept=".doc,.docx,.pdf,.xls,.xlsx">

<label>icon_ori</label><br>
<input type="text" name="icon_ori">

<label>comment</label><br>
<input type="text" name="comment">



  
  <input type="submit" value="Envoyer"><br>
</form>
</body>
</html>
