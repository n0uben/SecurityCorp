<?php require_once './header.php' ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>Les failles de Login</h2>
                <p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h2>La faille</h2>
                <form id="formXssFaille" action="/scripts/monProfilFaille.php" method="POST">
                    <label for="username"></label>
                    <input id="username" class="form-control" type="text" name="usernameFaille" required/>
                    <label for="passwordFaille"></label>
                    <input id="passwordFaille" class="form-control" type="text" name="passwordFaille" required/>
                    <input type="submit" class="mt-2 btn btn-danger form-control" value="Se connecter">
                </form>
            </div>
            <div class="col">
                <h2>La faille réparée</h2>
                <form id="formXssFailleReparee" action="/scripts/monProfil.php" method="POST">
                    <label for="username"></label>
                    <input id="username" class="form-control" type="text" name="username" required/>
                    <label for="password"></label>
                    <input id="password" class="form-control" type="text" name="password" required/>
                    <input type="submit" class="mt-2 btn btn-success form-control" value="Se connecter">
                </form>
            </div>
        </div>
    </div>

<?php require_once './footer.php' ?>