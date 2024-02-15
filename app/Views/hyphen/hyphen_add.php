<!DOCTYPE html>
<html>
<head>
    <title>add</title>
</head>
<style>
  body {
      background-color: #EFC620; 
      color: #7FCBD6; 
      
    }

    form {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #43B6C7; 
      border-radius: 10px;
      
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #000000;
      font-weight: bold;
      
    }

    label {
      display: block;
      margin-bottom: 2px;
      margin-top: 2px;
      color: #000000; 
      
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #71B4B2; 
      border-radius: 5px;
      background-color: #FFFFFF; 
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #FFF069; 
      color: #000000; 
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

  </style>
<body>
<a href="/hyphen/menu">menu</a>
<?php

            echo '<h1>Listes<h1>';

            echo '<form action="hyphen_list.php" method="post">';
            echo '<label for="liste-select">test</label>';
            echo '<input name="liste" id="liste">';

            echo '<input type="submit" value="Envoyer"> <br>';
            echo '</form>';
            
?>

</body>
</html>