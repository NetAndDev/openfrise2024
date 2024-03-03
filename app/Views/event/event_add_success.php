<!DOCTYPE html>
<html>

<head>
    <title>SUCCESS</title>
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">

</head>

<body>
    <h1>Vous avez ajouté :</h1>
    <?php
    /*    
    echo '<pre>';
    print_r(get_defined_vars());
    echo '</pre>';
    */
    $array_test = array(
        'label',
        'sublabel',
        'is_ponctual',
        'date_begin',
        'date_end',
        'comment'
    );
    unset($value['id_timeline']);
    echo '<div class="mael">';
    echo '<table><tr>';
    foreach ($fields as $name) {
        foreach ($array_test as $key) {
            if ($name == $key) {
                echo '<th>' . $nom[$key] . '</th>';
            }
        }
    }
    echo '</tr>';
    echo '<tr>';
    $value['is_ponctual'] = 0 ? 'Vrai' : 'Faux';
    foreach ($value as $row) {
        echo '<td>' . $row . '</td>';
    }
    echo '</tr>';
    echo '</table>';
    echo '</div>';
    ?>
</body>

</html>