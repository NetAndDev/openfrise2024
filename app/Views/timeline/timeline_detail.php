<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Timeline</title>

  <?php
     if (! empty($timeline) && is_array($timeline))
     {
        foreach ($timeline as $item)
        {
            if (is_array($item))
            {
                echo '<p>'.esc($item[login]).'</p>'."\n";
            }
        }
     }

     else 

     {
        echo '<p> Aucun utilisateur trouvé .</p>'."\n"; 
     } 
  ?> 

   </body> 

</html>