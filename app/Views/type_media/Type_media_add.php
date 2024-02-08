<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>BDD TYPES MEDIAS</title>
  <link href="../../../public/style/style.css" rel="stylesheet">
</head>
<body>
<form action="lienTypeMedia.php" method="post">

  <h1>Ajouter votre enregistrement</h1>

  <label>Code type média</label><br>
  <input type="text" name="Code type média">

  <label>label</label><br>
  <input type="text" name="label">

  <label>icon</label><br>
  <input type="text" name="icon"><br>
  <input type="file" name="parcourir" id="parcourir" accept=".doc,.docx,.pdf,.xls,.xlsx">

  <label>icon_ori</label><br>
  <input type="text" name="icon_ori">

  <label>comment</label><br>
  <input type="text" name="comment">



  
  <input type="submit" value="Envoyer"><br>
</form>
</body>
</html>
