<p><a href="<?= env('app.baseURL') ?>menu/">Menu</a></p>
    
    <form action="level/insert" method="post">
        <label for="label">Label :</label>
        <input type="text" name='label' required><br>
        <label for="commmet">comment :</label>
        <input type="text" name='comment' ><br><br>

        <input type="submit" value="Valider">
    </form>