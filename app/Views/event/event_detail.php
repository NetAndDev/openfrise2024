<!DOCTYPE html>
<html>

<head>
    <title>MENU</title>
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">

</head>

<body>
    <?php

    echo '<br>';
    echo '<div class="mael">';
    echo '<table><tr>';
    foreach ($fields as $name) {
        echo '<th>' . $nom[$name] . '</th>';
    }
    echo '</tr>';
    echo '<tr>';
    foreach ($value as $data) {

        $value['is_ponctual'] = 0 ? 'Vrai' : 'Faux';

        echo '<td>' . $data . '</td>';
    }
    echo '</tr>';
    echo '</table>';
    echo '</div>';
    //print_r($test);
    ?>
</body>

</html>