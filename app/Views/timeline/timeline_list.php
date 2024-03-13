<!doctype html>
<html lang="fr">
<head>
<link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css?<?= uniqid() ?>">
  <meta charset="utf-8">
  <title>Timeline</title>
</head>
<body>
<style>

table
{
	border: 1px solid black;
	border-collapse: collapse;
}

th
{
	border: 1px solid black;
	color: black;
    	padding: 5px;
	background-color: #7FCBD6;  
}
td
{
	border: 1px solid black;
    	padding: 5px;
		text-align:center;
}
    </style>
        <a href="/timeline/"> Menu </a> <br>

        <h1>" Affichage des frises "</h1>

        <table>
        <tr>
            <th> Libellé </th>
            <th> Sous-libellé </th>
            <th> Date de début</th>
            <th> Date de fin </th>
            <th> Commentaire </th>
            <th> Détail </th>
        </tr>
<?php
 
 /*echo '  <table>';

 foreach($fields as $name){
     echo '<th>'.$name.'</th>';
 } 
 foreach($value as $row){
     echo '<tr>';
     foreach($row as $data) {
         echo '<td>'.$data.'</td>';
     }
     echo '</tr>';
 } 
 echo '</table>';*/
 
 if (!empty($timeline) && is_array($timeline)){
        
    foreach($timeline as $item){
        if(is_array($item)){
            echo '<tr>';
            echo '<td>'.esc($item['label']).'</td>';
            echo '<td>'.esc($item['sublabel']).'</td>';
            echo '<td>'.esc($item['date_begin']).'</td>';
            echo '<td>'.esc($item['date_end']).'</td>';
            echo '<td>'.esc($item['comment']).'</td>';
            echo '<td><a href="detail?id='.esc($item['id_timeline']).'">Lien</a>';
            echo '</tr>';
        }
    }
}
else{
    echo 'Aucune frise trouvée.';
}

?>
             </table>
    </body>
</html>