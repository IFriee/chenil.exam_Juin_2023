<h3>Ajout d'un animal</h3>

<p class="important"> ! ! ! Merci d'enregistrer d'abord le propriétaire s'il n'a pas encore été créé ! ! !</p>

    <form action="/animaux" method="post" class="store">
        <table>
            <tr>
                <td>Nom:</td>
                <td><input type="text" name="nom" placeholder="Nom" required></td>
            </tr>
            <tr>
                <td>Sexe:</td>
                <td><input type="text" name="sexe" placeholder="Sexe" required></td>
            </tr>
            <tr>
                <td>Sterilizé:</td>
                <td><input type="checkbox" name="sterilise" value="1" ></td>
            </tr>
            <tr>
                <td>Date de naissance:</td>
                <td><input type="date" name="datenaiss" placeholder="Date de naissance" required></td>
            </tr>
            <tr>
                <td>Puce ID:</td>
                <td><input type="number" name="numeroid" placeholder="Puce ID" required></td>
            </tr>
            <tr>
            <td>Propriétaire:</td>
            <td>
                <select name="proprietaireid" required>
                    <?php foreach ($proprietaires as $proprietaire): ?>
                        <option value="<?php echo $proprietaire->id; ?>">
                        <?php echo $proprietaire->id . " - " . $proprietaire->nom; ?>

                    <?php endforeach; ?>
                </select>
            </td>
            </tr>

        </table>
        <input type="submit" value="Sauvegarder">

    </form>
 
            


