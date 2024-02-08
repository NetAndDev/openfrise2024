<!DOCTYPE html>
<html lang="fr">
<head>
    <title>ADD</title>
    <style>
        table,
        th,
        td {
            border-collapse: collapse;
            border: 1px solid black;
            background-color: #ffc0cb;
        }

        th {
            background-color: #87CEEB;
        }
    </style>
</head>
<body>

    <p>Liste</p>
    <a href="/team/">Retourner à team</a>
    <p><?=esc(print_r($data_n))?></p>

    <?php
    echo '<table>
            <tr>
                <th> name </th>
                <th> comment </th>
            </tr>';
    ?>

</body>
</html>
