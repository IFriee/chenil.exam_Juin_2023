<?php include('../views/layout/top.php'); ?>
<h3>Liste de séjours</h3>
<button class="xhr sejour create">Nouveau Sejour</button>
<br>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Date du début</th>
            <th>Date de fin</th>
            <th>Id de l'animal</th>
            <th>Nom de l'animal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($sejours as $sejour): ?>
            <tr>
                <td><?= $sejour->id; ?></td>
                <td><?= $sejour->datedebut; ?></td>
                <td><?= $sejour -> datefin; ?></td>
                <td><?= $sejour -> animalid; ?></td>
                <td>
                <?php
                $animalDAO = new AnimalDAO();
                $animal = $animalDAO->fetch($sejour->animalid);
                echo $animal->nom;
                ?>
            </td>
                <td><button class="xhr sejour edit" _id="<?= $sejour->id; ?>">Edit</button><button class="xhr sejour delete" _id="<?= $sejour->id; ?>">Delete</button></td>
            
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('../views/layout/bottom.php'); ?>