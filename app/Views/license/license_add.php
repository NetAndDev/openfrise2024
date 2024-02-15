<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
</head>
<body>
<p><a href="<?= env('app.baseURL') ?>license/">Menu</a></p>
<?= esc($title) ?>
    <h1>ajouter une licence</h1>

    <form action="<?= env('app.baseURL') ?>License/insert" method="POST">
  <!--   <form action="license_list.php" method="POST">--> 
   <label>le nom de la licence :</label>
   <input name= "license" id="license" type="text" />

   <label>le titre :</label>
   <input name="title" id="title" type="text" required></p>

   <label>le nom du fichier :</label>
   <input name="filename" id="filename" type="text" required></p>

   <p>veuillez inserer votre image:</p>

  <label for="myfile">Selectionnez un ficher:</label>
  <input type="file" id="myfile" name="filename_ori" accept="image/*, audio/*, video/* "><br><br>
  

   <label>le nom original du fichier :</label>
   <input name="filename_ori" id="filename_ori" type="text" required></p>

   <label>le nom de l'icone :</label>
   <input name="icon" id="icon" type="text" required></p>

   <label>le nom original de l'icone :</label>
   <input name="icon_ori" id="icon_ori" type="text" required></p>

   <label>le commentaire </label>
   <input name="comment" id="comment" type="text" required></p>




   <p><input name="submit" type="submit" value="Valider"></p>
</form>

</body>
</html>