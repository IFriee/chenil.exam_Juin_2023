

<p class="important">Merci d'enregistrer d'abord le propriétaire s'il n'a pas encore été créé</p>

    <form action="/" method="post" class="store">
        <table>
            <tr>
                <td>Nom:</td>
                <td><input type="text" name="nom" placeholder="Nom"></td>
            </tr>
            <tr>
                <td>Sexe:</td>
                <td><input type="text" name="sexe" placeholder="Sexe"></td>
            </tr>
            <tr>
                <td>Sterilizé:</td>
                <td><input type="checkbox" name="sterilise" value="1"></td>
            </tr>
            <tr>
                <td>Date de naissance:</td>
                <td><input type="date" name="datenaiss" placeholder="Date de naissance"></td>
            </tr>
            <tr>
                <td>Puce ID:</td>
                <td><input type="number" name="numeroid" placeholder="Puce ID"></td>
            </tr>
            <tr>
            <td>Propriétaire:</td>
            <td>
                <select name="proprietaireid">
                    <?php foreach ($proprietaires as $proprietaire): ?>
                        <option value="<?php echo $proprietaire->id; ?>"><?php echo $proprietaire->nom; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            </tr>

        </table>
        <input type="submit" value="Save">

    </form>
 
            


