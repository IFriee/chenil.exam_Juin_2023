<h3>Ajout d'un Propriétaire</h3>

<p class="important"><?= isset($error) ? $error : '' ?></p>

<form action="/proprietaires" method="post" class="store">
    <table>
        <tr>
            <td>Nom:</td>
            <td>
                <input type="text" name="nom" placeholder="Nom" required>
            </td>
            <?php if (isset($errors) && isset($errors["nom"])): ?>
                    <td class="error"><?= $errors["nom"] ?></td>
                <?php endif; ?>
        </tr>
        <tr>
            <td>Prénom:</td>
            <td>
                <input type="text" name="prenom" placeholder="Prénom" required>      
            </td>
            <?php if (isset($errors) && isset($errors["prenom"])): ?>
                    <td class="error"><?= $errors["prenom"] ?></td>
                <?php endif; ?>
        </tr>
        <tr>
            <td>Date de naissance:</td>
            <td>
                <input type="date" name="datenaiss" placeholder="Date de naissance" required>                
            </td>
            <?php if (isset($errors) && isset($errors["datenaiss"])): ?>
                    <td class="error"><?= $errors["datenaiss"] ?></td>
                <?php endif; ?>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="email" name="email" placeholder="Email" required>             
            </td>
            <?php if (isset($errors) && isset($errors["email"])): ?>
                    <td class="error"><?= $errors["email"] ?></td>
                <?php endif; ?>
        </tr>
        <tr>
            <td>Téléphone:</td>
            <td>
                <input type="tel" name="tel" placeholder="Téléphone" required>
            </td>
            <?php if (isset($errors) && isset($errors["tel"])): ?>
                    <td class="error"><?= $errors["tel"] ?></td>
                <?php endif; ?>
        </tr>
    </table>
    <input type="submit" value="Sauvegarder">
</form>
