<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Types de médias</title>
  <link href="../../../public/style/style.css" rel="stylesheet">
      <h1>La liste des types des medias </h1>
      <style>
        table {
    width: 100%;
    border-collapse: collapse;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: none;
  }

  th,
  td {
    padding: 10px;
    text-align: left;
    border: 1px solid #71B4B2; 
    font-family: "Montserrat", sans-serif;
    color: #000000; 
  }

  thead {
    background-color: #7FCBD6; 
    color: #000000; 
    font-family: "Montserrat", sans-serif;
  }

  tbody tr:nth-child(even) {
    background-color: #EFC620; 
  }

 
  .important {
    color: #FFF069; 
    font-weight: bold;
  }

 
  .fa-icon {
    font-size: 16px;
    margin-right: 5px;
  }
      </style>
</head>
<body>


  <?php

echo'<table>
    <thead>
        <tr>
            <th>Code type média</th>
            <th>Label</th>
            <th>Icon</th>
            <th>Icon ori</th>
            <th>Comment</th>
            <th>Date create</th>
            <th>Date update</th>
            
        </tr>
        </thead>';

for ($i = 0; $i < count($chart); $i++) {
    $item = $chart[$i];
    echo "<tr>";
    echo "<td>{$item['code_type_media']}</td>";
    echo "<td>{$item['label']}</td>";
    echo "<td>{$item['icon']}</td>";
    echo "<td>{$item['icon_ori']}</td>";
    echo "<td>{$item['comment']}</td>";
    echo "<td>{$item['date_create']}</td>";
    echo "<td>{$item['date_update']}</td>";
    echo "</tr>";
}
echo '</table>';
?>


    


</body>
</html>
