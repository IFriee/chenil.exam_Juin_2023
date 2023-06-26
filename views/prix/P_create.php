<h3>Ajout d'un prix sejour</h3>

<p class="error">Merci d'ajouter d'abord le proprietaire si il n'est pas déja inscrit</p>
<form action="/prix" method="post" class="store">
    <table>
        <tr>
            <td>Nom:</td>
            <td><input type="text" name="nom" placeholder="Nom" required></td>

        </tr>
        <tr>
            <td>Prix:</td>
            <td><input type="number" name="prix" placeholder="Prix" required></td>

        </tr>
        
    </table>
    <input type="submit" value="Sauvegarder">
</form>
