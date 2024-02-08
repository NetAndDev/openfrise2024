<!doctype html>
<html>
<head>
    <title>Liste</title>
</head>

<style>
    table, tr, th {

        border: 1px solid black;
    }

    th {

        padding: 5px;
    }
</style>

<body>
    <h1>Liste</h1>
    <table>
    <tr>
        <th>ID</th>
        <th>Rôle</th>
        <th>Commentaire</th>
        <th>Dernière modification</th>
    </tr>
    <?php
        if (!empty($right) && is_array($right)){
        
            foreach($right as $item){
                if(is_array($item)){
                    echo '<tr>';
                    echo '<td>'.esc($item['id_right']).'</td>';
                    echo '<td>'.esc($item['label']).'</td>';
                    echo '<td>'.esc($item['comment']).'</td>';
                    echo '<td>'.esc($item['date_update']).'</td>';
                    echo '</tr>';
                }
            }
        }
        else{
            echo "Aucun droit trouvé.";
        }
    ?>
    </table>
</body>
</html>