<h3>Ajout d'un Propriétaire</h3>

<p class="important"></p>

    <form action="/proprietaires" method="post" class="store">
        <table>
            <tr>
                <td>Nom:</td>
                <td><input type="text" name="nom" placeholder="Nom" required></td>
            </tr>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" name="prenom" placeholder="Prénom" required></td>
            </tr>
            <tr>
                <td>Date de naissance:</td>
                <td><input type="date" name="datenaiss" placeholder="Date de naissance" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="mail" name="email" placeholder="Email" required></td>
            </tr>
            <tr>
                <td>Téléphone:</td>
                <td><input type="number" name="tel" placeholder="Téléphone" required></td>
            </tr>


        </table>
        <input type="submit" value="Sauvegarder">

    </form>
 
            


