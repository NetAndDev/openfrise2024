<!DOCTYPE html>
<html>
<head>
    <title>liste</title>
</head>
<style>
body {
      background-color: #EFC620; 
      color: #7FCBD6;       
}
    
table, 
th, 
td {
    width: 500px;
    margin: 0 auto;
    text-align: center;
    border-collapse: collapse;
    border:1px solid black;
    background-color: #43B6C7;
    color: #000000;
    
}
th {
    background-color: #43B6C7;
}
h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #000000;
    font-weight: bold;

}
        </style>
<body>
<h1><strong>Liste</strong></h1>
<a href="/hyphen/menu">menu</a>
<?php

echo '  <table>';

foreach($fields as $name){
    echo '<th>'.$name.'</th>'."\n";
} 
foreach($value as $row){
    echo '<tr>';
    foreach($row as $data) {
        echo '<td>'.$data.'</td>'."\n";
    }
    echo '</tr>';
} 
echo '</table>';

?>

</body>
</html>