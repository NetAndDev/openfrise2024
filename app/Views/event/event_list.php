<!DOCTYPE html>
<html>
<head>
<title>LISTE</title>

</head>
<body>
<p> LISTE </p>
<a href="/event/">Retourner</a>
<?php
$db = \Config\Database::connect();;
$query  = $db->query('SELECT * FROM BDD_EVENTS');
$results = $query->getResultArray();

foreach ($results as $row) {
    print_r($row);
}
echo '<br>======================<br>';
echo '<table style="border:1px solid" ><tr style="border:1px">';
foreach (array_keys($row) as $t) {
    echo '<td style="border:1px solid">'.$t.'</td>';
}
echo '</tr></table>';
?>
</body>
</html>