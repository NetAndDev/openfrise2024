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
  <input type="file" name="parcourir" id="parcourir" accept=".doc,.docx,.pdf,.xls,.xlsx">

  <label>icon_ori</label>
  <input type="text" name="icon_ori">

  <label>comment</label>
  <input type="text" name="comment">



  
  <input type="submit" value="Envoyer">
</form>
</body>
</html>
