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
<?php
echo '<p>id timeline : '.$detail['id_timeline'].'</p>';

echo '<p>id hyphen : '.$detail['id_hyphen'].'</p>';

echo '<p>Date de début : '.$detail['date_begin'].'</p>';

echo '<p>Date de fin : '.$detail['date_end'].'</p>';

    if(!empty($detail['comment'])){
        echo '<p>Commentaire : '.$detail['comment'].'</p>';
    }
    else{
            echo '<p>Commentaire : Aucun commentaire</p>';
    }
    echo '<p>Date de création : '.$detail['date_create'].'</p>';

echo '<p>Dernière modification : '.$detail['date_update'].'</p>';

/**echo '  <table>';

foreach($fields as $name){
    echo '<th>'.$nom[$name].'</th>'."\n";
} 
foreach($value as $row){
    echo '<tr>';
    foreach($row as $data) {
        echo '<td>'.$data.'</td>'."\n";
    }
    echo '</tr>';
} 
echo '</table>';**/

?>
</body>
<footer class="footer">
        <div>
            <p> Conception </p>
        </div>
    </footer>
</html>