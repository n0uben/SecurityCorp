<?php require_once './header.php' ?>

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h2>Les failles de Login</h2>
                <p>Les failles d'acces indirect non autorisés correspondent à une authentification mal concue.
                    <br>
                    <br>
                    Sur l'exemple ci-dessous, dans le formulaire avec faille, on peut rentrer n'importe quel mot de passe pour accéder à un compte dont on connait le username.
                    <br>
                    En effet, le développeur a fait un petit oubli : il ne vérifie pas le mot de passe à la connexion, seulement le nom d'utilisateur
                    <br>
                    Une personne malveillante peut donc facilement accéder aux profils d'autres personnes et récupérer des informations.
                    <br>
                    <br>
                    Pour pallier à ce problème, on vérifie correctement les informations dans le formulaire sans faille.
                    <br>
                    <br>
                    A noter : on ne hash pas le mdp dans les formulaires, c'est une faille en soi car si un utilisateur arrive à accéder à notre bdd
                    <br>
                    il pourra voir les mots de passe de tous les utilisateurs !
                    <br>
                    Dans notre exemple, nous utilisons une requete préparée mais si l'on avait pas fait ca, avec une injection
                    <br>
                    SQL, l'utilisateur malveillant aurait pu aussi se connecter meme si le mot de passe était vérifié, en injectant du SQL (le fameux ;1=1;").
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <h2>La faille</h2>
                <form id="formXssFaille" action="/scripts/monProfilFaille.php" method="POST">
                    <label for="usernameFaille">Nom d'utilisateur :</label>
                    <input id="usernameFaille" class="form-control" type="text" name="usernameFaille" required/>
                    <label for="passwordFaille">Mot de passe</label>
                    <input id="passwordFaille" class="form-control" type="password" name="passwordFaille" required/>
                    <input type="submit" class="mt-2 btn btn-danger form-control" value="Se connecter">
                </form>
            </div>
            <div class="col">
                <h2>La faille réparée</h2>
                <form id="formXssFailleReparee" action="/scripts/monProfil.php" method="POST">
                    <label for="username">Nom d'utilisateur :</label>
                    <input id="username" class="form-control" type="text" name="username" required/>
                    <label for="password">Mot de passe</label>
                    <input id="password" class="form-control" type="password" name="password" required/>
                    <input type="submit" class="mt-2 btn btn-success form-control" value="Se connecter">
                </form>
            </div>
        </div>
    </div>

<?php require_once './footer.php' ?>