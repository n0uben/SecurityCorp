<?php require_once './header.php' ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>Les failles d'injection SQL</h2>
                <p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h2>La faille</h2>
                <form id="formXssFaille" action="/scripts/injection.php" method="POST">
                    <label for="messageFaille">Votre message :</label>
                    <input id="messageFaille" class="form-control" type="text" name="messageFaille" required/>
                    <input type="submit" class="mt-2 btn btn-danger form-control" value="Publier">
                </form>
            </div>
            <div class="col">
                <h2>La faille réparée</h2>
                <form id="formXssFailleReparee" action="/scripts/injection.php" method="POST">
                    <label for="message">Votre message :</label>
                    <input id="message" class="form-control" type="text" name="message" required/>
                    <input type="submit" class="mt-2 btn btn-success form-control" value="Publier">
                </form>
            </div>
        </div>
    </div>

<?php require_once './footer.php' ?>