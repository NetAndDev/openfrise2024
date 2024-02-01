<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Hyphen</title>

  <?php
     if (! empty($hyphen) && is_array($hyphen))
     {
        foreach ($hyphen as $item)
        {
            if (is_array($item))
            {
                echo '<p>'.esc($item['id_hyphen']).'</p>'."\n";
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