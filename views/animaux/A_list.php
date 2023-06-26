<?php include('../views/layout/top.php'); ?>
<h3>Liste des animaux</h3>
<button class="xhr animal create">Nouveau Animal</button>
<br>
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
            <th>Nom Propriétaires</th>
            <th>Poids</th>
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
                <td>
                <?php
                $proprietaireDAO = new ProprietaireDAO();
                $proprietaire = $proprietaireDAO->fetch($animal->proprietaireid);
                echo $proprietaire->nom;
                ?>
            </td>
            <td>
                <?php 
                $prixDAO = new PrixDAO();
                $prix = $prixDAO->fetch($animal->prixsejourid);
                

                var_dump($animal->prixsejourid);
                var_dump($prix);
                echo $prix->id;
                
                ?>
            </td>
            
                <td><button class="xhr animal edit" _id="<?= $animal->id; ?>">Edit</button><button class="xhr animal delete" _id="<?= $animal->id; ?>">Delete</button></td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include('../views/layout/bottom.php'); ?>