<?php include('../views/layout/top.php'); ?>
<h3>Liste des propriétaires</h3>
<button class="xhr proprietaire create">Nouveau Propriétaire</button>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de naissance</th>
            <th>E-mail</th>
            <th>Telephone</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($proprietaires as $proprietaire): ?>
            <tr>
                <td><?= $proprietaire->id; ?></td>
                <td><?= $proprietaire->nom; ?></td>
                <td><?= $proprietaire->prenom; ?></td>
                <td><?= $proprietaire->datenaiss; ?></td>
                <td><?= $proprietaire->email; ?></td>
                <td><?= $proprietaire->tel; ?></td>
                <td>
                    <button class="xhr proprietaire edit" _id="<?= $proprietaire->id; ?>">Edit</button>
                    <button class="xhr proprietaire delete" _id="<?= $proprietaire->id; ?>">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('../views/layout/bottom.php'); ?>
