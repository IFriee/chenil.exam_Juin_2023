<h3>Ajout d'un séjour</h3>

<p class="important"> ! ! ! Merci d'enregistrer d'abord l'animal  s'il n'a pas encore été créé ! ! !</p>

    <form action="/sejours" method="post" class="store">
        <table>
            <tr>
                <td>Date du début:</td>
                <td><input type="date" name="datedebut" placeholder="Nom" required></td>
            </tr>
            <tr>
                <td>Date de fin:</td>
                <td><input type="date" name="datefin" placeholder="Sexe" required></td>
            </tr>
            <tr>
                <td>Nom de l'animal:</td>
                <td>
                <select name="animalid" required>
                    <?php foreach ($animaux as $animal): ?>
                        <option value="<?php echo $animal->id; ?>">
                        <?php echo $animal->id . " - " . $animal->nom; ?>

                    <?php endforeach; ?>
            </td>
            </tr>

        </table>
        <input type="submit" value="Sauvegarder">

    </form>
 
            


