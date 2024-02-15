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
    echo '<th>Détails</th>';
    echo '</tr>';
    foreach ($value as $row) {
        echo '<tr>';
        $row['is_ponctual'] = 0 ? 'Vrai' : 'Faux';
        foreach ($array_test as $key) {
            if (array_key_exists($key, $row)) {
                echo '<td>'.$row[$key].'</td>';
            }
        
        }

        echo '<td>' . '<a href="' . base_url() . 'event/detail?id_timeline=' . $row['id_timeline'] . '&id_event=' . $row['id_event'] . '">Liens</a>' . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
    ?>
</body>

</html>