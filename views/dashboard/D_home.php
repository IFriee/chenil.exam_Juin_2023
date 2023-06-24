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

<?php include('../views/layout/bottom.php'); ?>