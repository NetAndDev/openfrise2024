<!DOCTYPE html>
<html>

<head>
    <title>UPDATE</title>
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">

</head>

<body>
    <h1>Mise à jour des éléments</h1>
    <?php
    $array_test = array(
        'label',
        'sublabel',
        'is_ponctual',
        'date_begin',
        'date_end',
        'comment'
    );
    echo '<br>';
    echo '<div class="mael">';
    echo '<table><tr>';
    foreach ($fields as $name) {
        foreach ($array_test as $key) {
            if ($name == $key) {
                echo '<th>' . $nom[$key] . '</th>';
            }
        }
    }
    echo '<th>Mettre à Jour</th>';
    echo '</tr>';
    foreach ($value as $row) {
        echo '<tr>';
        $row['is_ponctual'] = 0 ? 'Vrai' : 'Faux';
        foreach ($array_test as $key) {
            if (array_key_exists($key, $row)) {
                echo '<td>' . $row[$key] . '</td>';
            }
        }
        echo '<td>' . '<a href="' . base_url() . 'event/update_line?id_timeline=' . $row['id_timeline'] . '&id_event=' . $row['id_event'] . '">Liens</a>' . '</td>';
        echo '</td>';
    }

    echo '</table>';
    echo '</div>';
    ?>
</body>

</html>