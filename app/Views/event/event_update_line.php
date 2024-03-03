<!DOCTYPE html>
<html>

<head>
    <title>UPDATE_LINE</title>
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">

</head>

<body>
    <h1>Ligne à mettre à jour</h1>
    <?php
    try {
        echo '<div class="mael">';
        // ne pas oublie le action + method
        echo '<form>';
        echo '<table><tr>';
        // Tableau à deux colonnes + lisible ?
        foreach ($fields as $name) {
            echo '<th>' . $nom[$name] . '</th>';
        }
        echo '</tr>';
        echo '<tr>';
        try {
            foreach ($value as $data) {
                echo '<td>';
                // ajouter un label après les tests
                // le is_ponctual devrait être une liste déroulante
                // on devrait pas pouvoir changer les id non plus
                echo '
                <input
                    type="text"
                    name="' . array_search($data, $value) . '"
                    placeholder="' . $data . '"
                >';

                echo '</td>';
            }
        } catch (\Throwable $th) {
            foreach ($fields as $name) {
                echo '<td>' . 'ERR' . '</td>';
            }
        }
        echo '</tr>';
        echo '</table>';
        echo '<button>Submit</button>';
        echo '</form>';
        echo '</div>';
    } catch (\Throwable $th) {
        echo 'Erreur';
    }

    ?>
</body>

</html>