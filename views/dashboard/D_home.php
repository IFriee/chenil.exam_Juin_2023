<?php include('../views/layout/top.php'); ?>
<h3>Dashboard</h3>


<!-- Filtrer les séjours sur un propriétaire -->
<!-- non fonctionnel -->

<form action="/dashboard" method="get">
    <label for="proprietaire">Filtrer les séjours sur un propriétaire :</label>
    <select name="proprietaire" id="proprietaire">
        <?php foreach ($proprietaires as $proprietaire): ?>
            <option value="<?= $proprietaire->id ?>"><?= $proprietaire->nom ?></option>
        <?php endforeach; ?>
    </select>
    <input type="submit" value="Filtrer">
</form>
<?php
if (isset($_GET['proprietaire'])) {
    $proprietaireId = $_GET['proprietaire'];
    $totalSejours = $this->getSejoursByProprietaire($proprietaireId);
    
    echo "<p>Le nombre total de séjours pour le propriétaire sélectionné est : $totalSejours</p>";
}
?>


<br>

<!-- Afficher le taux d'occupation pour une date en particulier -->
<form action="/dashboard" method="get">
    <label for="date">Afficher le taux d'occupation pour une date en particulier :</label>
    <input type="date" name="date" id="date">
    <input type="submit" value="Afficher">
</form>

<br>

<!-- Afficher le total tout-->
<table>
    <thead>
        <tr>
            <th>Total d'animaux</th>
            <th>Total de proprietaires</th>
            <th>Total de séjours</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $totalAnimaux ?></td>
            <td><?= $totalProprietaires ?></td>
            <td><?= $totalSejours ?></td>
        </tr>
    </tbody>
</table>

<?php include('../views/layout/bottom.php'); ?>