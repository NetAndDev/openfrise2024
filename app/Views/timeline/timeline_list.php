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
    
        <h1>" Liste des enregistrements "</h1>

        <a href="/timeline/"> Menu </a> <br>

<?php
        echo '<table>

    <tr>
    <th> id_timeline </th>
    <th> label </th>
    <th> sublabel </th>
    <th> date_begin </th>
    <th> date_end </th>
    <th> is_public </th>
    <th> comment </th>
    <th> code_licence </th>
    </tr>'; 
   
?>
    
        
    </body>
</html>