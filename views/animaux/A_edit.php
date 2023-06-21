<h3>Modifier les informations de l'animal</h3>
<form action="/<?= $animal->id ?>/update" method="post" class="update">
    <table>
        <tbody>
            <tr>
                <th>ID:</th>
                <td><?= $animal->id ?></td>
            </tr>
            <tr>
                <th>Nom:</th>
                <td><input type="text" name="nom" value="<?= $animal->nom ?>"></td>
                <?php if (isset($errors['nom'])): ?>
                    <td class="error"><?= $errors['nom'] ?></td>
                <?php endif; ?>
            </tr>
            <tr>
                <th>Sexe:</th>
                <td><input type="text" name="sexe" value="<?= $animal->sexe ?>"></td>
                <?php if (isset($errors['sexe'])): ?>
                    <td class="error"><?= $errors['sexe'] ?></td>
                <?php endif; ?>
            </tr>
            <tr>
                <th>Stérilisé:</th>
                <td>
                <select name="sterilise">
                    <option value="1" <?= ($animal->sterilize == 1) ? 'selected' : '' ?>>Oui</option>
                    <option value="0" <?= ($animal->sterilize == 0) ? 'selected' : '' ?>>Non</option>
                </select>
                </td>

                <?php if (isset($errors['sterilise'])): ?>
                    <td class="error"><?= $errors['sterilise'] ?></td>
                <?php endif; ?>
            </tr>

            <tr>
                <th>Date de naissance:</th>
                <td><input type="date" name="datenaiss" value="<?= $animal->datenaiss ?>"></td>
                <?php if (isset($errors['datenaiss'])): ?>
                    <td class="error"><?= $errors['datenaiss'] ?></td>
                <?php endif; ?>
            </tr>
            <tr>
                <th>Puce ID:</th>
                <td><input type="number" name="numeroid" value="<?= $animal->numeroid ?>"></td>
                <?php if (isset($errors['numeroid'])): ?>
                    <td class="error"><?= $errors['numeroid'] ?></td>
                <?php endif; ?>
            </tr>
            <tr>
                <th>Propriétaire ID:</th>
                <td>
                    <select name="proprietaireid">
                        <?php foreach ($proprietaires as $proprietaire): ?>
                            <option value="<?= $proprietaire->id ?>" <?= ($proprietaire->id == $animal->proprietaireid) ? 'selected' : '' ?>>
                                <?= $proprietaire->id ?> - <?= $proprietaire->nom ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>

    <input type="submit" value="Mettre à jour">
</form>
