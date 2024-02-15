<p><a href="<?= env('app.baseURL') ?>menu/">Menu</a></p>
    
    <form action="<?= env('app.baseURL') ?>level/insert" method="POST">
        <label for="label">Label :</label>
        <input type="text" name='label' required><br>
        <label for="comment">comment :</label>
        <input type="text" name='comment' ><br><br>

        <input type="submit" value="Valider">
    </form>