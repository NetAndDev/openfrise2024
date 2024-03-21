<p><a href="<?= env('app.baseURL') ?>menu/">Menu</a></p>

<table>
        <tr>
            <th>Poste</th>
            <th>Commentaire</th>
            <th>Détail</th>
        </tr>
    <?php
        if (!empty($level) && is_array($level)){
        
            foreach($level as $item){
                if(is_array($item)){
                    echo '<tr>';
                    echo '<td>'.esc($item['label']).'</td>';
                    echo '<td>'.esc($item['comment']).'</td>';
                    echo '<td><a href="detail?id_level='.esc($item['id_level']).'">Détail</a><br></td>';
                    echo '</tr>';
                }
            }
        }
        else{
            echo 'Aucun level trouvé.';
        }
    ?>
</table> 