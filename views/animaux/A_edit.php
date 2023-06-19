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
            </tr>
            <tr>
                <th>Sexe:</th>
                <td><input type="text" name="sexe" value="<?= $animal->sexe ?>"></td>
            </tr>
            <tr>
                <th>Stérilisé:</th>
                <td><input type="checkbox" name="sterilise" value="<?= $animal->sterilize ?>"></td>
            </tr>
            <tr>
                <th>Date de naissance:</th>
                <td><input type="date" name="datenaiss" value="<?= $animal->datenaiss ?>"></td>
            </tr>
            <tr>
                <th>Puce ID:</th>
                <td><input type="number" name="numeroid" value="<?= $animal->numeroid ?>"></td>
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

