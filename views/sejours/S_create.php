<h3>Ajout d'un séjour</h3>
<?= isset($error) ? $error : '' ?>
<?php if (!empty($errors)): ?>
    <p class="error">Merci d'enregistrer d'abord l'animal s'il n'a pas encore été créé !</p>
<?php endif; ?>

<form action="/sejours" method="post" class="store">
    <table>
        <tr>
            <td>Date du début:</td>
            <td>
                <input type="date" name="datedebut" placeholder="Nom" required>
                <?php if (isset($errors["datedebut"])): ?>
                    <span class="error"><?php echo $errors["datedebut"]; ?></span>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>Date de fin:</td>
            <td>
                <input type="date" name="datefin" placeholder="Sexe" required>
                <?php if (isset($errors["datefin"])): ?>
                    <span class="error"><?php echo $errors["datefin"]; ?></span>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>Nom de l'animal:</td>
            <td>
                <select name="animalid" required>
                    <?php foreach ($animaux as $animal): ?>
                        <option value="<?php echo $animal->id; ?>">
                            <?php echo $animal->id . " - " . $animal->nom; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Sauvegarder">
</form>


