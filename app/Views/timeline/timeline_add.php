<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <title>Timeline</title>

  <style>
  body {
      background-color: #EFC620; 
      color: #7FCBD6; 
      
    }

    form {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #43B6C7; 
      border-radius: 10px;
      
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #000000;
      font-weight: bold;
      
    }

    label {
      display: block;
      margin-bottom: 2px;
      margin-top: 2px;
      color: #000000; 
      
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #71B4B2; 
      border-radius: 5px;
      background-color: #FFFFFF; 
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
      margin-bottom: 10px;
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

      <a href="/timeline/"> Menu </a> <br>  

      <h1>Ajout d'un enregistrement</h1>


    <form action="#" method="post">
        <label>Libellé</label>
        <input type="texte" name="label"><br><br>
        <label>Sous-libellé</label>
        <input type="texte" name="sublabel"><br><br>
        <label>Date de début</label>
        <input type="texte" name="date_begin"><br><br>
        <label>Date de fin</label>
        <input type="texte" name="Date de fin"><br><br>
        <label>is_public</label>
        <input type="texte" name="is_public"><br><br>
        <label>Commentaire</label>
        <input type="texte" name="Commentaire"><br><br>
        <label>code_licence</label>
        <select name="code_licence"><br>
            <option value="121">121</option>
            <option value="122">122</option>
            <option value="123">123</option>
        </select><br>
        <input type="submit" Value="Envoyer">
    </form>


    </body>
</html>