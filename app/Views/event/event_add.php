<!DOCTYPE html>
<html>

<head>
    <title>ADD</title>
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">
</head>

<body>
    <h1>Ajouter un nouvel évènement</h1>
    <a href="/event/">Retourner</a>
    <?= validation_list_errors() ?>
    <form action="insert" method="post">
        <?php
        $array_test = array(
            'label',
            'sublabel',
            'is_ponctual',
            'date_begin',
            'date_end',
            'comment'
        );
        echo '<table>';
        echo '<tr>';
        echo '<td>';
        echo '<label for="timeline">Période :</label>';
        echo '</td>';
        echo '<td>';
        echo '<select name="id_timeline" id="timeline">';
        foreach ($timeline as $key) {
            echo '<option value="' . $key['id_timeline'] . '">' . $key['label'] . '</option>';
        }
        echo '</td>';
        echo '</select>';
        echo '</tr>';

        foreach ($fields as $name) {
            foreach ($array_test as $key) {
                if ($name == $key) {
                    echo '<tr>';
                    echo '<td>';
                    echo '<label for="' . $name . '">' . $nom[$name] . ':</label>';
                    echo '</td>';
                    echo '<td>';
                    echo '<input type="text" id="' . $name . '" name="' . $name . '">';
                    echo '</td>';
                    echo '</tr>';
                }
            }
        }
        echo '</table>';
        ?>
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>