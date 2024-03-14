<!DOCTYPE html>
<html>
<head>
    <title>LISTE</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 50%; 
            margin: 20px 0;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<a href="/team/">Retourner à team</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Nom équipe</th>
            <th>Commentaire</th>
            <th>Date de création</th>
            <th>Date de modification</th>
        </tr>
        <?php
       if (!empty($data_n) && is_array($data_n)) {
        foreach ($data_n as $data) {
            echo '<tr>';
            echo '<td>' . $data['id_team'] . '</td>';
            echo '<td>' . $data['name'] . '</td>';
            echo '<td>' . $data['comment'] . '</td>';
            echo '<td>' . $data['date_create'] . '</td>';
            echo '<td>' . $data['date_update'] . '</td>'; 
            echo '</tr>';
        }
    } else {
        echo "<tr><td colspan='5'>Aucun enregistrement trouvé.</td></tr>";
    }
    ?>
</table>

</body>
</html>
