<!DOCTYPE html>
<html>

<head>
    <title>ADD</title>
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">
</head>

<body>
    <h1>Ajouter un nouvel évènement</h1>
    <a href="/event/">Retourner</a>
    <form action="add" method="post">
        <?php
        
        echo '<table>';

        foreach ($fields as $name) {
            echo '<tr>';
            echo '<td>';
            echo '<label for="' . $name . '">' . $nom[$name] . ':</label>';
            echo '</td>';
            echo '<td>';
            echo '<input type="text" id="' . $name . '">';
            echo '</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>
        <input type="submit" value="Envoyer">

        <?php
        echo '<pre>';
        $arr = get_defined_vars();
        print_r($arr);
        echo '</pre>';
        ?>
    </form>
</body>

</html>