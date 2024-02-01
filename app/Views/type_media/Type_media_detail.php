<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Types de médias</title>
 
  <a href="/type_media/"> Menu </a> <br> 
  
  <?php
     if (! empty($type_media) && is_array($type_media))
     {
        foreach ($type_media as $TM)
        {
            if (is_array($TM))
            {
                echo '<p>'.esc($TM['code_type_media']).'</p>'."\n";
            }
        }
     }

     else 

     {
        echo '<p> Aucun type de media trouvé </p>'."\n"; 
     } 
  ?> 

   </body> 

</html>