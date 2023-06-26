<h3>Modifier les informations de l'animal</h3>
<form action="/prix/<?= $prix->id ?>/update" method="post" class="update">
    <table>
        <tbody>
            <tr>
                <th>ID:</th>
                <td><?= $prix->id ?></td>
            </tr>
            <tr>
                <th>Nom:</th>
                <td><input type="text" name="nom" value="<?= $prix->nom ?>"></td>
            </tr>
            <tr>
                <th>Prix:</th>
                <td><input type="text" name="prix" value="<?= $prix->prix ?>"></td>
            </tr>
      
        </tbody>
    </table>

    <input type="submit" value="Mettre à jour">
</form>
