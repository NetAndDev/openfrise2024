<!doctype html>
<htlm>
<head>
</head>
<body>
    <h1>Page d'acceuil</h1>
    <a href="/gallery/">Retourner dans le menu</a>

<?php

echo '<table style="border:1px solid; border-collapse: collapse"><tr>';
foreach ($fields as $name){
    echo '<th style="border:1px solid">'.$name.'</th>';
}
echo '<th style="border:1px solid">'.'Détail'.'</th>';

foreach ($value as $row){
    echo '</tr>';
    foreach ($row as $data){
        echo '<td style="border:1px solid">'.$data.'</td>';
    }
    echo '<td style="border:1px solid">'.'<a href="/gallery/detail?id_gallery='.$row['id_gallery'].'">Detail</a>'.'</td>';
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>