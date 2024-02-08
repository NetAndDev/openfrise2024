<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>BDD TYPES MEDIAS</title>
  <link href="../../../public/style/style.css" rel="stylesheet">
  <style>
    form {
    width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #43B6C7; 
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }

  h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #FFF069; 
    font-weight: bold;
  }

  label {
    display: block;
    margin-bottom: 10px;
    color: #000000; 
  }

  input[type="text"],
 
  #parcourir {
    
    background-color: #FFFFFF; 
    color: #000000; 
    border: none;
    display: inline-block;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
  }

  input[type="submit"] {
    background-color: #FFF069;
    color: #000000;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
  }
  </style>
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
