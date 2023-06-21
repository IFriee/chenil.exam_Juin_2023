<h3>Modifier les informations du propriétaire</h3>
<form action="/proprietaires/<?= $proprietaire->id ?>/update" method="post" class="update">
    <table>
        <tbody>
            <tr>
                <th>ID:</th>
                <td><?= $proprietaire->id ?></td>
            </tr>
            <tr>
                <th>Nom:</th>
                <td>
                    <input type="text" name="nom" value="<?= $proprietaire->nom ?>">
                    <?php if (isset($errors["nom"])): ?>
                        <p class="error"><?= $errors["nom"] ?></p>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>Prenom:</th>
                <td>
                    <input type="text" name="prenom" value="<?= $proprietaire->prenom ?>">
                    <?php if (isset($errors["prenom"])): ?>
                        <p class="error"><?= $errors["prenom"] ?></p>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>Date de naissance:</th>
                <td>
                    <input type="date" name="datenaiss" value="<?= $proprietaire->datenaiss ?>">
                    <?php if (isset($errors["datenaiss"])): ?>
                        <p class="error"><?= $errors["datenaiss"] ?></p>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>
                    <input type="mail" name="email" value="<?= $proprietaire->email ?>">
                    <?php if (isset($errors["email"])): ?>
                        <p class="error"><?= $errors["email"] ?></p>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>Télephone:</th>
                <td>
                    <input type="number" name="tel" value="<?= $proprietaire->tel ?>">
                    <?php if (isset($errors["tel"])): ?>
                        <p class="error"><?= $errors["tel"] ?></p>
                    <?php endif; ?>
                </td>
            </tr>
        </tbody>
    </table>

    <input type="submit" value="Mettre à jour">
</form>
