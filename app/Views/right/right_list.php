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
        <ul>
        <li><a href="/right/menu">Retour au menu</a></li>
        <li><a href="/right/add">Ajouter des rôles</a></li>
        </ul>
    <h1>Liste</h1>
    <table>
    <tr>
        <th>ID</th>
        <th>Rôle</th>
        <th>Commentaire</th>
    </tr>
    <?php
        if (!empty($right) && is_array($right)){
        
            foreach($right as $item){
                if(is_array($item)){
                    echo '<tr>';
                    echo '<td>'.esc($item['id_right']).'</td>';
                    echo '<td>'.esc($item['label']).'</td>';
                    echo '<td>'.esc($item['comment']).'</td>';
                    echo '<td><a href="/right/detail/">'.'Voir les détails'.'</a></td>';
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