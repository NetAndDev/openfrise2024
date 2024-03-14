<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Types de médias</title>
  <link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css">
</head>
<body>

  <h1>Types de médias</h1>

  <div class="liste-medias">
    <?php foreach ($chart as $media) : ?>
      <div class="media-item">
        <h2><?= $media['label'] ?></h2>
        <ul>
          <li>
            <b>Code:</b> <?= $media['code_type_media'] ?>
          </li>
          <li>
            <b>Libellé:</b> <?= $media['label'] ?>
          </li>
          <li>
            <b>Icone:</b> <?= $media['icon'] ?>
          </li>
          <li>
            <b>Commentaire:</b> <?= $media['comment'] ?>
          </li>
        </ul>
        <a href="/type_media/link<?= esc($media['code_type_media']) ?>"> Retour au menu</a>
        <a href="/type_media/update?<?= esc($media['code_type_media']) ?>">Modifier</a>
        <a href="/type_media/delete?<?= esc($media['code_type_media']) ?>" class="supprimer">Supprimer</a>
      </div>
    <?php endforeach; ?>
  </div>

  <a href="/type_media/add" class="ajouter">Ajouter un type de média</a>

</body>
</html>

