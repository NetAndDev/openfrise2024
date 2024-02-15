<p><a href="<?= env('app.baseURL') ?>menu/">Menu</a></p>

<table>
        <tr>
            <th>label</th>
            <th>|</th>
            <th>Comment</th>
        </tr>
    <?php
        if (!empty($level) && is_array($level)){
        
            foreach($level as $item){
                if(is_array($item)){
                    echo '<tr>';
                    echo '<td>'.esc($item['label']).'</td>';
                    echo'<td>|</td>';
                    echo '<td>'.esc($item['comment']).'</td>';
                    echo '</tr>';
                }
            }
        }
        else{
            echo 'Aucun level trouvé.';
        }
    ?>
</table>