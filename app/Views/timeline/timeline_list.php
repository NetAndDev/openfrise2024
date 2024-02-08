<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Timeline</title>
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
	background-color: #9981f7;  
}

</style>

</head>

<body>
    
        <a href="/timeline/"> Menu </a> <br>

        <h1>" Liste des enregistrements "</h1>

<?php
 
 echo '  <table>';

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
 echo '</table>';
 

?>
 
    </body>
</html>