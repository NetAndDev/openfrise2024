<!DOCTYPE html>
<html>
<head>
    <title>Liste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>styles/default/styles.css">
</head>

<body>
<h1><strong>Liste</strong></h1>
<a href="/hyphen">menu</a>
<?php

echo '  <table>';

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
echo '</table>';

?>
<a href='/hyphen/detail'>détail</a>
</body>
<footer class="footer">
        <div>
            <p> Conception </p>
        </div>
    </footer>
</html>