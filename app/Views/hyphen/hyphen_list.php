<!DOCTYPE html>
<html>
<head>
    <title>Liste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css?<?= uniqid() ?>">
</head>

<body>
<h1><strong>Liste</strong></h1>
<a href="/hyphen">menu</a>
<table>
        <tr>
            <th>date de début</th>
            <th>date de fin</th>
            <th>commentaire</th>
            <th>Détail</th>
        </tr>
<?php
        if (!empty($hyphen) && is_array($hyphen)){
        
            foreach($hyphen as $item){
                if(is_array($item)){
                    echo '<tr>';
                    echo '<td>'.esc($item['date_begin']).'</td>';
                    echo '<td>'.esc($item['date_end']).'</td>';
                    echo '<td>'.esc($item['comment']).'</a></td>';
                    echo '<td><a href="detail?id='.esc($item['id_hyphen']).'">Lien</a>';
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
<footer class="footer">
        <div>
            <p> Conception </p>
        </div>
    </footer>
</html>