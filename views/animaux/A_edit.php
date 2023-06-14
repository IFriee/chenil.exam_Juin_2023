<h3>Modifier</h3>
<form action="/update" method="post" class="update">

    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Sexe</th>
            <th>Serilisé</th>
            <th>Date de Naissance</th>
            <th>N° Puce</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td><?= $animal->id ?></td>
                <td><input type="text" name="name" value="<?= $animal->nom ?>"></td>
                <td><input type="text" name="sexe" value="<?= $animal->sexe ?>"></td>
                <td><input type="checkbox" name="sterilise" value="<?= $animal->sterilize ?>"></td>
                <td><input type="date" name="datenaiss" value="<?= $animal->datenaiss ?>" ></td>
                <td><input type="text" name="sexe" value="<?= $animal->numeroid ?>"</td>


    </tbody>
    </table>

    <input type="submit" value="Mettre à jour">
</form>