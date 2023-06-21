<h3>Ajout d'un animal</h3>
<?php if (isset($errorMessage)): ?>
    <p class="error"><?= $errorMessage ?></p>
<?php endif; ?>

<form action="/animaux" method="post" class="store">
    <table>
        <tr>
            <td>Nom:</td>
            <td><input type="text" name="nom" placeholder="Nom" required></td>
            <?php if (isset($errors['nom'])): ?>
                <td class="error"><?= $errors['nom'] ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>Sexe:</td>
            <td><input type="text" name="sexe" placeholder="Sexe" required></td>
            <?php if (isset($errors['sexe'])): ?>
                <td class="error"><?= $errors['sexe'] ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>Sterilizé:</td>
            <td>                
                <select name="sterilise">
                    <option value="1" >Oui</option>
                    <option value="0" >Non</option>
                </select>
                </td></td>
            <?php if (isset($errors['sterilise'])): ?>
                <td class="error"><?= $errors['sterilise'] ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>Date de naissance:</td>
            <td><input type="date" name="datenaiss" placeholder="Date de naissance" required></td>
            <?php if (isset($errors['datenaiss'])): ?>
                <td class="error"><?= $errors['datenaiss'] ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>Puce ID:</td>
            <td><input type="number" name="numeroid" placeholder="Puce ID" required></td>
            <?php if (isset($errors['numeroid'])): ?>
                <td class="error"><?= $errors['numeroid'] ?></td>
            <?php endif; ?>
        </tr>
        <tr>
            <td>Propriétaire:</td>
            <td>
                <select name="proprietaireid" required>
                    <?php foreach ($proprietaires as $proprietaire): ?>
                        <option value="<?= $proprietaire->id ?>">
                            <?= $proprietaire->id . " - " . $proprietaire->nom ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
            <?php if (isset($errors['proprietaireid'])): ?>
                <td class="error"><?= $errors['proprietaireid'] ?></td>
            <?php endif; ?>
        </tr>
    </table>
    <input type="submit" value="Sauvegarder">
</form>
