<!doctype html>
<html>
<head>
    <title>Détails</title>
</head>

<style>
    th {

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
    <h1>Détails</h1>
    <a href="/right/list/">Liste</a>
    <br>
    <table>
    <tr>
        <th>ID</th>
        <th>Date de création</th>
        <th>Dernière modification</th>
    </tr>
    <?php
        if (!empty($detail) && is_array($detail)){
        
                if(is_array($detail)){
                    echo '<tr>';
                    echo '<td><strong>'.esc($detail['id_right']).'</strong></td>';
                    echo '<td>'.esc($detail['date_create']).'</td>';
                    echo '<td>'.esc($detail['date_update']).'</td>';
                    echo '</tr>';
                }
        }
        else{
            echo "Aucun droit trouvé.";
        }

    ?>
    </table>
    
</body>
</html>