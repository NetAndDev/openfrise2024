<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>BDD TYPES MEDIAS</title>
  <style>
    body {
      font-family: sans-serif;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"] {
      width: 300px;
      padding: 10px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }

    select {
      width: 300px;
      padding: 10px;
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #FF0000;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
<form action="lienTypeMedia.php" method="post">

  <h1>Ajouter votre enregistrement</h1>

  <label>Code type média</label>
  <input type="text" name="Code type média">

  <label>label</label>
  <input type="text" name="label">

  <label>icon</label>
  <input type="text" name="icon">

  <label>icon_ori</label>
  <input type="text" name="icon_ori">

  <label>comment</label>
  <input type="text" name="comment">

  <label>date_create</label>
  <input type="text" name="date_create">

  <label>date_update</label>
  <input type="text" name="date_update">


  <label for="Type-Media">Choisir le type de votre enregistrement</label>
  <select name="Type-Media" id="Type-Media">
    <option value="image">Image</option>
    <option value="video">Vidéo</option>
    <option value="audio">Audio</option>
    <option value="document">Document</option>
  </select>

  <input type="submit" value="Envoyer">
</form>
</body>
</html>
