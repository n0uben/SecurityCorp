<?php require_once './header.php' ?>

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h2>Les failles XSS</h2>
            <p>Les failles XSS existent quand les entrées de l'utilisateurs ne sont pas vérifiées avant d'être interprétées par le serveur
                <br>
                <br>
                Sur l'exemple ci-dessous, dans le formulaire avec faille, si on entre dans le formulaire "&lt;script>alert("");&lt;/script>" (sans les guillemets), l’utilisateur
                <br>
                malveillant peut envoyer un lien avec le parametre de recherche modifié et le faire exécuter par notre serveur, et récupérer ainsi diverses informations .
                <br>
                <br>
                Un simple échappement des caractères avec la fonction "hmtlentities" de php permet d'éviter ce désagrément.
            </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h2>La faille</h2>
            <form id="formXssFaille" action="./scripts/failleXSS.php" method="GET">
                <label for="rechercheXSSFaille"></label>
                <input id="rechercheXSSFaille" class="form-control" type="text" name="rechercheXSSFaille" placeholder="Tapez ici votre recherche" required/>
                <input type="submit" class="mt-2 btn btn-danger form-control" value="Recherche">
            </form>
        </div>
        <div class="col">
            <h2>La faille réparée</h2>
            <form id="formXssFailleReparee" action="/scripts/failleXSS.php" method="GET">
                <label for="rechercheXSSFailleReparee"></label>
                <input id="rechercheXSSFailleReparee" class="form-control" type="text" name="rechercheXSSFailleReparee" placeholder="Tapez ici votre recherche" required />
                <input type="submit" class="mt-2 btn btn-success form-control" value="Recherche">
            </form>
        </div>
    </div>
</div>

<?php require_once './footer.php' ?>