<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Modifier un Type Média</title>
  <link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css">
</head>
<body>
    <p><a href="<?= env('app.baseURL') ?>type_media/">Menu</a></p>

   
            <h1>Modifier un Type Média - <?= isset($media['label']) ? $media['label'] : '' ?></h1>

<?php if (isset($errors) && !empty($errors)): ?>
  <div class="error-message">
    <?php foreach ($errors as $field => $error): ?>
      <p><?= $field ?> : <?= $error ?></p>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

<form action="<?= env('app.baseURL') ?>type_media/update" method="POST">

  <input type="hidden" name="code_type_media" value="<?= isset($media['code_type_media']) ? $media['code_type_media'] : '' ?>">

  <label>Code type média</label><br>
  <input type="text" name="code_type_media" value="<?= isset($media['code_type_media']) ? $media['code_type_media'] : '' ?>" >

  <label>Libellé*</label><br>
  <input type="text" name="label" value="<?= isset($media['label']) ? $media['label'] : '' ?>" required>

  <label>Icone*</label><br>
  <input type="text" name="icon" value="<?= isset($media['icon']) ? $media['icon'] : '' ?>" required>

  <label>Icone originale*</label><br>
  <input type="text" name="icon_ori" value="<?= isset($media['icon_ori']) ? $media['icon_ori'] : '' ?>" required>

  <label>Commentaire*</label><br>
  <input type="text" name="comment" value="<?= isset($media['comment']) ? $media['comment'] : '' ?>" required> 



  <input type="submit" value="Modifier">

</form>

</body>
</html>
