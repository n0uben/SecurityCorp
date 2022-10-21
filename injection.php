<?php require_once './header.php' ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>Les failles d'injection SQL</h2>
                <p>Les failles d'injection SQL existent quand les entrées de l'utilisateurs ne sont pas vérifiées avant d'être envoyées en BDD
                    <br>
                    <br>
                    Sur l'exemple ci-dessous, dans le formulaire avec faille, si on entre dans le formulaire "Robert");DROP TABLE utilisateurs;
                    <br>
                    l’utilisateur malveillant peut supprimer toutes les publications en BDD. C'est la faille du petit <a href="https://xkcd.com/327/" target="_blank">"Bobby tables", rendue célèbre par XKCD</a> .
                    <br>
                    <br>
                    Une simple requête préparée avec PDO en PHP permet d'éviter cette faille.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h2>La faille</h2>
                <form id="formXssFaille" action="./scripts/injection.php" method="POST">
                    <label for="messageFaille">Votre message :</label>
                    <input id="messageFaille" class="form-control" type="text" name="messageFaille" required/>
                    <input type="submit" class="mt-2 btn btn-danger form-control" value="Publier">
                </form>
            </div>
            <div class="col">
                <h2>La faille réparée</h2>
                <form id="formXssFailleReparee" action="./scripts/injection.php" method="POST">
                    <label for="message">Votre message :</label>
                    <input id="message" class="form-control" type="text" name="message" required/>
                    <input type="submit" class="mt-2 btn btn-success form-control" value="Publier">
                </form>
            </div>
        </div>
    </div>

<?php require_once './footer.php' ?>