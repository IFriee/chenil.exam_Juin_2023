<?php include('../views/layout/top.php'); ?>
<h3>Dashboard</h3>


<!-- Filtrer les séjours sur un propriétaire -->
<form action="/dashboard" method="get">
    <label for="proprietaire">Filtrer les séjours sur un propriétaire :</label>
    <select name="proprietaire" id="proprietaire">
        <?php foreach ($proprietaires as $proprietaire): ?>
            <option value="<?= $proprietaire->id ?>"><?= $proprietaire->nom ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Filtrer">
</form>

<br>

<!-- Afficher le taux d'occupation pour une date en particulier -->
<form action="/dashboard" method="get">
    <label for="date">Afficher le taux d'occupation pour une date en particulier :</label>
    <input type="date" name="date" id="date">
    <input type="submit" value="Afficher">
</form>

<br>

<!-- Afficher le total de séjours / animaux / etc -->
<table>
    <thead>
        <tr>
            <th>Total de séjours</th>
            <th>Total d'animaux</th>
            <!-- Ajoutez d'autres colonnes pour les statistiques souhaitées -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $totalSejours ?></td>
            <td><?= $totalAnimaux ?></td>
            <!-- Ajoutez d'autres colonnes pour afficher les valeurs correspondantes -->
        </tr>
    </tbody>
</table>

<?php include('../views/layout/bottom.php'); ?>

<?php include('../views/layout/bottom.php'); ?>