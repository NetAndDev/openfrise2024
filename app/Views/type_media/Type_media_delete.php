<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Supprimer un Type Média</title>
  <link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css">
</head>
<body>
    <p><a href="<?= env('app.baseURL') ?>type_media/">Menu</a></p>

    <h1>Supprimer un Type Média - <?= isset($Typemedia['label']) ? $Typemedia['label'] : '' ?></h1>

    

    <form action="<?= env('app.baseURL') ?>type_media/delete" method="POST">
      <input type="hidden" name="code_type_media" value="<?= isset($Typemedia['code_type_media']) ? $Typemedia['code_type_media'] : '' ?>">
      
      <p>Êtes-vous sûr de vouloir supprimer le type média <strong><?= isset($Typemedia['label']) ? $Typemedia['label'] : '' ?></strong> ?</p>
      
      <input type="submit" value="Confirmer la suppression">
    </form>

</body>
</html>
