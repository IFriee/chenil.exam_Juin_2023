<h3>Modifier les informations de l'sejour</h3>
<form action="/sejours/<?= $sejour->id ?>/update" method="post" class="update">
    <table>
        <tbody>
            <tr>
                <th>ID:</th>
                <td><?= $sejour->id ?></td>
            </tr>
            <tr>
                <th>Date debut du séjour:</th>
                <td><input type="date" name="datedebut" value="<?= $sejour->datedebut ?>"></td>
            </tr>
            <tr>
                <th>Date fin du séjour:</th>
                <td><input type="date" name="datefin" value="<?= $sejour->datefin ?>"></td>
            </tr>
            <tr>
            <th>Animal ID:</th>
            <td>
                <select name="animalid">
                    <?php foreach ($animaux as $animal): ?>
                        <option value="<?= $animal->id ?>" <?= ($animal->id == $sejour->animalid) ? 'selected' : '' ?>>
                            <?= $animal->id ?> - <?= $animal->nom ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>

        </tbody>
    </table>

    <input type="submit" value="Mettre à jour">
</form>

