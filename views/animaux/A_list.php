<?php include('../views/layout/top.php'); ?>
<h3>Liste des animaux</h3>
<button class="xhr create">New Animal</button>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Sexe</th>
            <th>Serilisé</th>
            <th>Date de Naissance</th>
            <th>N° Puce</th>
            <th>Propriétaire ID</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($animaux as $animal): ?>
            <tr>
                <td><?= $animal->id; ?></td>
                <td><?= $animal->nom; ?></td>
                <td><?= $animal -> sexe; ?></td>
                <td><?= $animal -> sterilise; ?></td>
                <td><?= $animal -> datenaiss; ?></td>
                <td><?= $animal -> numeroid; ?></td>
                <td><?= $animal -> proprietaireid; ?></td>
                <td><button class="xhr edit" _id="<?= $animal->id; ?>">Edit</button><button class="xhr delete" _id="<?= $animal->id; ?>">Delete</button></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('../views/layout/bottom.php'); ?>