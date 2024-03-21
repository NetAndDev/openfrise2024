<!doctype html>
<html>
<head>
    <title>ajouter un fichier</title>
    <link rel="stylesheet" href="<?=base_url();?>/styles/default/style.css">
</head>
<body>
<p><a href="<?= env('app.baseURL') ?>license/">Menu</a></p>
<?= esc($title) ?>
    <h1>ajouter une licence</h1>

<form action="<?= env('app.baseURL') ?>license/insert" method="POST">
      <label>le nom de la licence :</label>
   <input name= "license" id="license" type="text">

   <label>le code de la licence :</label>
   <input name="code_license" id="code_license" type="text" required><br>

   <label>le titre :</label>
   <input name="title" id="title" type="text" required><br>

   <label>le nom du fichier :</label>
   <input name="filename" id="filename" type="text" required><br>

   <p>veuillez inserer votre image:</p>

  <label for="myfile">Selectionnez un ficher:</label>
  <input type="file" id="myfile" name="filename_ori"><br><br>

   <label>le nom de l'icone :</label>
   <input name="icon" id="icon" type="text" required><br>

   <label for="myfile">Selectionnez une icone:</label>
  <input type="file" id="myfile_ico" name="icon_ori"><br><br>


   <label>le commentaire </label>
   <input name="comment" id="comment" type="text" required><br>




   <input name="submit" type="submit" value="Valider">
</form>

</body>
</html>
