<form action="/update" method="post" class="update">
    <input type="hidden" name="id" value="<?= $animal->id ?>">
    <input type="text" name="name" value="<?= $animal->nom ?>">
    <input type="submit" value="Update">
</form>