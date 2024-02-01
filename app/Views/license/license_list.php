<body>

<h1>Licence</h1>


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

</tr>
    </table>
    <?php
        if (!empty($license) && is_array($license)){
            foreach($license as $item){
                if(is_array($item)){
                    echo '<p>'.esc($item['id_license']).'</p>';
                }
            }
        }
        else{
            echo '<p>Aucune Licence trouvé.</p>';
        }
    ?>
</body>

