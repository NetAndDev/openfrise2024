<!DOCTYPE html>
<html>

<head>
    <title>ADD</title>
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">
</head>

<body>
    <h1>Ajouter un nouvel évènement</h1>
    <a href="/event/">Retourner</a>
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

        foreach ($fields as $name) {
            foreach ($array_test as $key) {
                if ($name == $key) {
                    echo '<tr>';
                    echo '<td>';
                    echo '<label for="' . $name . '">' . $nom[$name] . ':</label>';
                    echo '</td>';
                    echo '<td>';
                    echo '<input type="text" id="' . $name . '">';
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