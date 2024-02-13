<!DOCTYPE html>
<html>

<head>
    <title>LISTE</title>
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">
</head>

<body>
    <h1>Liste des évènements</h1>
    <a href="/event/">Retourner</a>
    <?php
    echo '<br>';
    echo '<div class="mael">';
    echo '<table><tr>';
    foreach ($fields as $name) {
        echo '<th>' . $nom[$name] . '</th>';
    }
    echo '</tr>';
    foreach ($value as $row) {
        echo '<tr>';
        $row['is_ponctual'] = 0 ? 'Vrai' : 'Faux';
        foreach ($row as $data) {
            echo '<td>' . $data . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
    ?>
</body>

</html>