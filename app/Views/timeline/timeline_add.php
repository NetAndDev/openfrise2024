<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Timeline</title>
    <link rel="stylesheet" href="<?= base_url(); ?>style/default/style.css?<?= uniqid() ?>">
</head>
<body>
<style>
body {
	background-color: #EFC620; 
	color: #7FCBD6; 
	
}
form {
	width: 500px;
	margin: 0 auto;
	padding: 20px;
	background-color: #43B6C7; 
	border-radius: 10px;
	
}
h1 
{
	text-align: center;
	margin-bottom: 20px;
	color: #000000;
	font-weight: bold;
	
}

label {
	display: block;
	margin-bottom: 2px;
	margin-top: 2px;
	color: #000000; 
	
}

input[type="text"],
select {
	width: 100%;
	padding: 10px;
	border: 1px solid #71B4B2; 
	border-radius: 5px;
	background-color: #FFFFFF; 
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
	margin-bottom: 10px;
}

input[type="submit"] {
	background-color: #FFF069; 
	color: #000000; 
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	font-weight: bold;
}

span {
  display: flex;
}

input[type="radio"] {
  margin-right: 10px;
}
</style>

      <p><a href="<?= env('app.baseURL') ?>timeline/">Menu</a></p>

           <h1>Ajout d'une frise</h1>

     <form action="<?= env('app.baseURL') ?>timeline/insert" method="POST">

        <label>Libellé</label>
        <input type="texte" name="label" required><br><br>
        <label>Sous-libellé</label>
        <input type="texte" name="sublabel" required><br><br>
        <label>Date de début</label>
        <input type="texte" name="date_begin" required><br><br>
        <label>Date de fin</label>
        <input type="texte" name="date_end" required><br><br>

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
