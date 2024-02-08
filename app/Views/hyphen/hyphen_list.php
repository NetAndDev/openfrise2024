<!DOCTYPE html>
<html>
<head>
    <title>liste</title>
</head>
<style>
table, 
th, 
td {
    border-collapse: collapse;
    border:1px solid black;
    background-color: #a4a4f2;
   font-family: Arial, Helvetica, sans-serif;
    
}
th {
    background-color: #a4a4f2;
}
h1 {
    color: #a4a4f2;
    background-color: black;
    width: 48% ;
    font-family: Arial, Helvetica, sans-serif;

}
        </style>
<body>
<h1><strong>Liste</strong></h1>
<?php

echo '  <table>';

foreach($fields as $name){
    echo '<th>'.$name.'</th>';
} 
echo '</table>';


    if (!empty($hyphen) && is_array($hyphen)){
        foreach($hyphen as $item){
            if(is_array($item)){
                echo esc($item['foofighters']);
            }
        }
    }
    else{
        echo 'Aucun Média trouvé.';
    }

    

?>

</body>
</html>