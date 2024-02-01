<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Timeline</title>
 
  <a href="/timeline/"> Menu </a> <br> 

  <?php
     if (! empty($timeline) && is_array($timeline))
     {
        foreach ($timeline as $item)
        {
            if (is_array($item))
            {
                echo '<p>'.esc($item['id_timeline']).'</p>'."\n";
            }
        } 
     }
     else 
     {
        echo '<p> Aucune frise trouvée </p>'."\n"; 
     } 
  ?> 

   </body> 

</html>