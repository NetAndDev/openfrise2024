<!doctype html>
<html lang=fr>
<head>
    <title>Page de détail</title>
</head>
<body>
    <?php
    try{
        echo '<table><tr>';
        foreach($fields as $name){
            echo '<th>'. $name .'</th>'; 
        }
        echo '</tr>';
        echo '<tr>';
        try{
            foreach($value as $data){
                echo '<td>'.$data.'</data>';
            }
        }
        catch (\throwable $th){
            foreach($fields as $name){
                echo '<td>'. 'ERR'.'<td>';
            }   
        }
        echo '</tr>';
        echo '</table>';
        echo '</div>';
    }catch(\Throwable $th) {
        echo 'Erreur';
    }
    ?>

</body>

             