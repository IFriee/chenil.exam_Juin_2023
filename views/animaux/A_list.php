<?php include('../views/layout/top.php'); ?>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($animaux as $animal): ?>
            <tr>
                <td><?= $animal->id; ?></td>
                <td><?= $animal->nom; ?></td>
                <td><button class="xhr show" _id="<?= $animal->id; ?>">Show</button></td>
                <td><button class="xhr edit" _id="<?= $animal->id; ?>">Edit</button></td>
                <td><button class="xhr delete" _id="<?= $animal->id; ?>">Delete</button></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<button class="xhr create">New Animal</button>
<?php include('../views/layout/bottom.php'); ?>