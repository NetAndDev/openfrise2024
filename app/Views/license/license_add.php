<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
</head>
<body>

<?= esc($title) ?>
    <h1>ajouter une licence</h1>
    <form action="license_list.php" method="post">
   <label>le nom de la licence :</label>
   <input name= "license" id="license" type="text" />

   <label>le titre :</label>
   <input name="title" id="title" type="text" /></p>

   <label>le nom du fichier :</label>
   <input name="filename" id="filename" type="text" /></p>

   <label>le nom original du fichier :</label>
   <input name="filename_ori" id="filename_ori" type="text" /></p>

   <label>le nom de l'icone :</label>
   <input name="icon" id="icon" type="text" /></p>

   <label>le nom original de l'icone :</label>
   <input name="icon_ori" id="icon_ori" type="text" /></p>

   <label>le commentaire </label>
   <input name="comment" id="comment" type="text" /></p>




   <button type="submit">Valider</button>
</form>

</body>
</html>