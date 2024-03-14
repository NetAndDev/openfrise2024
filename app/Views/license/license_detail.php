<!doctype html>
<html>
<head>
    <title>Détails</title>
</head>

<style>
    th {

        border: 1px solid black;
    }

    th {

        padding: 5px;
    }
</style>

<body>
        <ul>
        <li><a href="/license/menu">Retour au menu</a></li>
        <li><a href="/license/add">Ajouter des rôles</a></li>
        </ul>
    <h1>Détails</h1>
    <a href="/license/list/">Liste</a>
    <br>
    <table>
    <tr>
             <th>code licence</th>
        <th>titre</th>
        <th>nom du fichier</th>
	<th>nom original du fichier</th>
	<th>icon</th>
	<th>icone d'origine</th>
	<th>date de création</th>
	<th> date de modification</th>  
  </tr>
    <?php
        if (!empty($detail) && is_array($detail)){
        
                if(is_array($detail)){
                    echo '<tr>';
                    echo '<td><strong>'.esc($detail['code_license']).'</strong></td>';
		    echo '<td>'.esc($detail['title']).'</td>';
		    echo '<td>'.esc($detail['filename']).'</td>';
		    echo '<td>'.esc($detail['filename_ori']).'</td>';
		    echo '<td>'.esc($detail['icon']).'</td>';
		    echo '<td>'.esc($detail['icon_ori']).'</td>';
                    echo '<td>'.esc($detail['date_create']).'</td>';
                    echo '<td>'.esc($detail['date_update']).'</td>';
                    echo '</tr>';
                }
        }
        else{
            echo "Aucun droit trouvé.";
        }

    ?>
    </table>
    
</body>
</html>
