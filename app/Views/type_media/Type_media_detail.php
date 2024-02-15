<!doctype html>
<html>
<head>
    <title>Détails</title>
</head>


<body>
        <ul>
        <li><a href="/type_media/link">Retour au menu</a></li>
        <li><a href="/type_media/add">Ajouter des rôles</a></li>
        </ul>
    <h1>Détails</h1>
    <a href="/type_media/list/">Liste</a>
    <br>
    <table>
    <tr>
            <th>code_type_media</th>
            <th>Label</th>
            <th>Icon</th>
            <th>Comment</th>
            <th>detail</th>
            
    </tr>
    <?php
        if (!empty($detail) && is_array($detail)){
        
                if(is_array($detail)){
                    echo '<tr>';
                    echo '<td><strong>'.esc($detail['label']).'</td>';
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