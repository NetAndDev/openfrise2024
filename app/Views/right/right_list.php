<!doctype html>
<html>
<head>
    <title>Liste</title>
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
    <h1>Liste</h1>
    <a href="/right/detail/">Voir les détails</a>
    <br><br>
    <table>
    <tr>
        <th>Rôle</th>
        <th>Commentaire</th>
    </tr>
    <?php
        if (!empty($right) && is_array($right)){
        
            foreach($right as $item){
                if(is_array($item)){
                    echo '<tr>';
                    echo '<td><strong>'.esc($item['label']).'</strong></td>';
                    echo '<td>'.esc($item['comment']).'</td>';
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