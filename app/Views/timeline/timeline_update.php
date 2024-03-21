<!doctype html>
<html lang=fr>
<head>
<link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css">
    <title> Modifier une frise</title>
</head>
<body>
        <?php

        if (!empty($timeline) && is_array($timeline)){

            echo "<h1>Modifier la Frise : ".$detail['label']."</h1>";
            echo "<form action='https://ci4.amiarr.futaie.me/timeline/update' method='POST'>";
            echo '<input type="text" name="id_timeline" value="'.$detail['id_timeline'].'" hidden>

            <label>Libellé</label>
            <input type="texte" name="label" value="'.$detail['label'].'" required><br><br>
            <label>Sous-libellé</label>
            <input type="texte" name="sublabel" value="'.$detail['sublabel'].'" required><br><br>
            <label>Date de début</label>
            <input type="date" name="date_begin" value="'.$detail['date_begin'].'" required><br><br>
            <label>Date de fin</label>
            <input type="date" name="date_end" value="'.$detail['date_end'].'" required><br><br>

            <label> Est-ce public ? </label><br>
        <span class="radio">
               <input type="radio" id="is_public_true" name="is_public" value="1" checked>
               <label for="is_public_true">Vrai</label>
               <input type="radio" id="is_public_false" name="is_public" value="0">
               <label for="is_public_false">Faux</label><br>
        </span><br>
             
        <label>Commentaire</label>
        <textarea name="comment" rows= "4" cols= "55' minlength="1" maxlength="300"></textarea><br><br>

        <label>Code licence</label>
        <select name="code_licence">
            <option value="121">121</option>
            <option value="122">122</option>
            <option value="123">123</option>
        </select><br>

            
                <input type="submit" Value="Envoyer">';
        }
        else{
            echo "Aucune frise sélectionnée !";
        }
        ?>
            </form>
        </body>