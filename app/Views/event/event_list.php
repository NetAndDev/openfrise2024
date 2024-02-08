<!DOCTYPE html>
<html>
<head>
<title>LISTE</title>

</head>
<body>

<a href="/event/">Retourner</a>
<?php
echo '<table style="border:1px solid; border-collapse: collapse" ><tr>';
foreach ($fields as $name) {
    echo '<th style="border:1px solid">'.$name.'</th>';
}
echo '</tr>';
foreach ($value as $row) {
    echo '<tr>';
    foreach ($row as $data) {
        echo '<td style="border:1px solid">'. $data. '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>
</body>
</html>