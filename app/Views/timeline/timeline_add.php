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
    input[type="radio"] {
    display: inline-block; 
    margin-right: 5px; 
    }
   


  </style>


</head>
<body>

      <p><a href="<?= env('app.baseURL') ?>timeline/">Menu</a></p>

           <h1>Ajout d'une frise</h1>

     <form action="<?= env('app.baseURL') ?>timeline/insert" method="POST">

        <label>Libellé</label>
        <input type="texte" name="label" required><br><br>
        <label>Sous-libellé</label>
        <input type="texte" name="sublabel" required><br><br>
        <label>Date de début</label>
        <input type="texte" name="date_begin" required><br><br>
        <label>Date de fin</label>
        <input type="texte" name="date_end" required><br><br>

        <label> Est-ce public ? </label>
               <input type="radio" id="is_public_true" name="is_public" value="1">
               <label for="is_public_true">True</label>
               <input type="radio" id="is_public_false" name="is_public" value="0">
               <label for="is_public_false">False</label><br>

        <label>Commentaire</label>
        <textarea type="texte" name="comment" rows='4' cols='55' minlength="1" maxlength="300"></textarea><br><br>
        <label>code_licence</label>
        <select name="code_licence"><br>
            <option value="121">121</option>
            <option value="122">122</option>
            <option value="123">123</option>
        </select><br>

    <p><input name="submit" type="submit" value="Valider"></p>

     </form>

     </body>
</html>
