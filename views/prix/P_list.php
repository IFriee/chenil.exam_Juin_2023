<?php include('../views/layout/top.php'); ?>
<h3>Liste des prix</h3>
<button class="xhr prix create">Nouveau Prix</button>
<br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($prix as $prix): ?>
            <tr>
                <td><?= $prix -> id; ?></td>
                <td><?= $prix -> nom; ?></td>
                <td><?= $prix -> prix; ?></td>
               
                <td><button class="xhr prix edit" _id="<?= $prix->id; ?>">Edit</button><button class="xhr prix delete" _id="<?= $prix->id; ?>">Delete</button></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('../views/layout/bottom.php'); ?>