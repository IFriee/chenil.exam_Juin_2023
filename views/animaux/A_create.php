

<form action="/" method="post" class="store">
    <p class="important">Merci d'enregistrer d'abord le propriétaire s'il n'a pas encore été créé</p>

    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="sexe" placeholder="Sexe">
    <input type="checkbox" name="sterilise" value="1">
    <label for="sterilise">Serilizé ?</label>
    <input type="date" name="datenaiss" placeholder="Date de naissance">
    <label for="datenaiss">Date de naissance </label>

    <input type="text" name="numeroid" placeholder="ID Number">
    
    <!-- Ajouter la liste déroulante des IDs des propriétaires -->
    <select name="proprietaireid">
    <?php foreach ($ids as $id) { ?>
        <option value="<?php echo $id; ?>"><?php echo $id; ?></option>
    <?php } ?>
    </select>




    <input type="submit" value="Save">
</form>
