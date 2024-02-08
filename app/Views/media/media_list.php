<!doctype html>
<html lang=fr>
<head>
    <title>Liste des médias</title>
</head>
<body>
    <h1>Liste des médias</h1>
    <table>
        <tr>
            <td>id_media</td>
            <td>label</td>
            <td>sublabel</td>
            <td>legend</td>
            <td>source</td>
            <td>filename</td>
        </tr>
    </table>
    <?php
        if (!empty($media) && is_array($media)){
            foreach($media as $item){
                if(is_array($item)){
                    echo esc($item['label']);
                }
            }
        }
        else{
            echo 'Aucun Média trouvé.';
        }
    ?>
</body>