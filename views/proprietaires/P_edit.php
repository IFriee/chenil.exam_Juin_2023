<h3>Modifier les informations de l'animal</h3>
<form action="/proprietaires/<?= $proprietaire->id ?>/update" method="post" class="update">
    <table>
        <tbody>
            <tr>
                <th>ID:</th>
                <td><?= $proprietaire->id ?></td>
            </tr>
            <tr>
                <th>Nom:</th>
                <td><input type="text" name="nom" value="<?= $proprietaire->nom ?>"></td>
            </tr>
            <tr>
                <th>Prenom:</th>
                <td><input type="text" name="prenom" value="<?= $proprietaire->prenom ?>"></td>
            </tr>
            <tr>
                <th>Date de naissance:</th>
                <td><input type="date" name="datenaiss" value="<?= $proprietaire->datenaiss ?>"></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="mail" name="email" value="<?= $proprietaire->email ?>"></td>
            </tr>
            <tr>
                <th>Télephone:</th>
                <td><input type="number" name="tel" value="<?= $proprietaire->tel ?>"></td>
            </tr>

        </tbody>
    </table>

    <input type="submit" value="Mettre à jour">
</form>

