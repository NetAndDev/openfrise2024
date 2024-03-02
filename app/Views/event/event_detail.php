<!DOCTYPE html>
<html>

<head>
    <title>MENU</title>
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">

</head>

<body>
    <h1>Détails</h1>
    <?php

    try {
        echo '<div class="mael">';
        echo '<table><tr>';
        foreach ($fields as $name) {
            echo '<th>' . $nom[$name] . '</th>';
        }
        echo '</tr>';
        echo '<tr>';
        try {
            foreach ($value as $data) {
                $value['is_ponctual'] = 0 ? 'Vrai' : 'Faux';
                echo '<td>' . $data . '</td>';
            }
        } catch (\Throwable $th) {
            foreach ($fields as $name) {
                echo '<td>' . 'ERR' . '</td>';
            }
        }
        echo '</tr>';
        echo '</table>';
        echo '</div>';
    } catch (\Throwable $th) {
        echo 'Erreur';
    }

    ?>
</body>

</html>