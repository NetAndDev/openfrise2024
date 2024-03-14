<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Types de médias</title>
  <link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css">
        <h1>La liste des types des medias </h1>
      
</head>
<body>


  <?php

echo'<table>
    <thead>
        <tr>
           
            <th>code_type_media</th>
            <th>Label</th>
            <th>Icon</th>
            <th>Comment</th>
            <th>detail</th>
            <th>update</th>
            <th>delete</th>
            
            
        </tr>
        </thead>';

for ($i = 0; $i < count($chart); $i++) {
    $item = $chart[$i];
    echo "<tr>";
    echo "<td>{$item['code_type_media']}</td>";
    echo "<td>{$item['label']}</td>";
    echo "<td>{$item['icon']}</td>";
    //echo "<td>{$item['icon_ori']}</td>";
    echo "<td>{$item['comment']}</td>";
    //echo "<td>{$item['date_create']}</td>";
    //echo "<td>{$item['date_update']}</td>";
   
   
                    echo '<td><a href="/type_media/detail?id='.esc($item['code_type_media']).'">'.'Détails'.'</a></td>';
                    echo '<td><a href="/type_media/update?id='.esc($item['code_type_media']).'">'.'Modifier'.'</a></td>';
                    echo '<td><a href="/type_media/delete?id='.esc($item['code_type_media']).'">'.'Supprimer'.'</a></td>';

                    echo '</tr>';
    echo "</tr>";
}
echo '</table>';
?>



    


</body>
</html>
