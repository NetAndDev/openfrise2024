<!DOCTYPE html>
<html>
<head>
    <title>add</title>
</head>
<body>

<?php

    /*$db = \Config\Database::connect();
    $query   = $db->query('SELECT * FROM BDD_HYPHENS');
    $results = $query->getResult();*/

            echo 'Listes :' . '<br>';

            echo '<form action="hyphen_list.php" method="post">';
            echo '<label for="liste-select"></label>';
            echo '<input name="liste" id="liste">';

            while ($row = $statement->fetch()) {
            
            }
            echo '<input type="submit" value="Envoyer"> <br>';
            echo '</form>';
            
?>

</body>
</html>