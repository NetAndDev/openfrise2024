<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Supprimer un Type Média</title>
  <link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css">
</head>
<body>
    <p><a href="<?= base_url() ?>type_media/">Menu</a></p>

    <h1>Supprimer un Type Média</h1>

    <?php if (isset($errors) && !empty($errors)): ?>
        <div class="error-message">
            <?php foreach ($errors as $field => $error): ?>
                <p><?= $field ?> : <?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url() ?>type_media/delete" method="POST">
        <input type="hidden" name="code_type_media" value="<?= isset($media['code_type_media']) ? $media['code_type_media'] : '' ?>">

        <?php if (isset($media['label'])) : ?>
            <p>Êtes-vous sûr de vouloir supprimer le type de média : <?= $media['label'] ?> ?</p>
        <?php else : ?>
            <p>Êtes-vous sûr de vouloir supprimer ce type de média ?</p>
        <?php endif; ?>

        <input type="submit" value="Supprimer">
    </form>

</body>
</html>
