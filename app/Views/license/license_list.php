<head>
    <title> LISTE </title>
</head>
<body>

<h1>Licence</h1>

<a href="/license/">Retourner sur l'index</a>

 <table> 
<tr>
<th>id license</th>
<th>title</th>
<th>filename</th>
<th>filename_ori</th>
<th>icon</th>
<th>icon_ori</th>
<th>comment</th>
<th>date_create</th>
<th>date_update</th>

</tr>

    <?php
        if (!empty($license) && is_array($license)){

/* insertion des données */
            foreach($license as $item){
                if(is_array($item)){
                    echo '<tr>';
                    echo '<td>'.esc($item['idlicense']).'</td>';
                    echo '<td>'.esc($item['title']).'</td>';
                    echo '<td>'.esc($item['filename']).'</td>';
                    echo '<td>'.esc($item['filename_ori']).'</td>';
                    echo '<td>'.esc($item['icon']).'</td>';
                    echo '<td>'.esc($item['icon_ori']).'</td>';
                    echo '<td>'.esc($item['comment']).'</td>';
                    echo '<td>'.esc($item['date_create']).'</td>';
                    echo '<td>'.esc($item['date_update']).'</td>';
                    echo '</tr>';
                }
            }
        }
        else{
            echo '<p>Aucune Licence trouvé.</p>';
        }
    
    ?>
     </table>
    <body>

