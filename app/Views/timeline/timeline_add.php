<!doctype html>
<html lang="fr">
<head>
<link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css?<?= uniqid() ?>">
  <meta charset="utf-8">
  <title>Timeline</title>
</head>
<body>
      <p><a href="<?= env('app.baseURL') ?>timeline/">Menu</a></p>

           <h1>Ajout d'une frise</h1>

     <form action="<?= env('app.baseURL') ?>timeline/insert" method="POST">

        <label>Libellé</label>
        <input type="texte" name="label" required><br><br>
        <label>Sous-libellé</label>
        <input type="texte" name="sublabel" required><br><br>
       
        <label>Date de début</label>
        <input type="date" name="date_begin" required><br><br>
        <label>Date de fin</label>
        <input type="date" name="date_end" required><br><br>


        <label> Est-ce public ? </label><br>
        <span class="radio">
               <input type="radio" id="is_public_true" name="is_public" value="1" checked>
               <label for="is_public_true">Vrai</label>
               <input type="radio" id="is_public_false" name="is_public" value="0">
               <label for="is_public_false">Faux</label><br>
        </span><br>

        <label>Commentaire</label>
        <textarea type="texte" name="comment" rows='4' cols='55' minlength="1" maxlength="300"></textarea><br><br>
        <label>Code licence</label>
        <select name="code_licence">
            <option value="121">121</option>
            <option value="122">122</option>
            <option value="123">123</option>
        </select><br>
    <p><input name="submit" type="submit" value="Valider"></p>

     </form>

     </body>
</html>
