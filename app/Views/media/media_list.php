<!doctype html>
<html lang=fr>
<head>
    <title>Liste des médias</title>
</head>
<body>
    <h1>Liste des médias</h1>
    <table>
        <tr>
            <th>Titre</th>
            <th>Sous-titre</th>
            <th>Légende</th>
            <th>Source</th>
            <th>Nom de fichier</th>
        </tr>
    <?php
        if (!empty($media) && is_array($media)){
        
            foreach($media as $item){
                if(is_array($item)){
                    echo '<tr>';
                    echo '<td>'.esc($item['label']).'</td>';
                    echo '<td>'.esc($item['sublabel']).'</td>';
                    echo '<td>'.esc($item['legend']).'</td>';
                    echo '<td><a href='.esc($item['source']).'>'.esc($item['source']).'</a></td>';
                    echo '<td>'.esc($item['filename']).'</td>';
                    echo '</tr>';
                }
            }
        }
        else{
            echo 'Aucun Média trouvé.';
        }
    ?>
    </table>
</body>