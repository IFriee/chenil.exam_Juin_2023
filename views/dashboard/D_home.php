<?php include('../views/layout/top.php'); ?>
<h3>Dashboard</h3>




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




<h1>Calcul du prix de séjour</h1>
    
    <form action="/" method="POST">
        <label for="animalId">ID de l'animal :</label>
        <input type="text" name="animalId" id="animalId" required>
        
        <label for="nombreJours">Nombre de jours de séjour :</label>
        <input type="text" name="nombreJours" id="nombreJours" required>
        
        <input type="submit" value="Calculer">
    </form>
    
<?php echo $prixTotal ;?>

<?php include('../views/layout/bottom.php'); ?>