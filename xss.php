<?php require_once './header.php' ?>

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h2>Les failles XSS</h2>
            <p>Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet </p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <h2>La faille</h2>
            <form id="formXssFaille" action="/scripts/failleXSS.php" method="POST">
                <label for="rechercheXSSFaille"></label>
                <input id="rechercheXSSFaille" class="form-control" type="text" name="rechercheXSSFaille" placeholder="Tapez ici votre recherche" required/>
                <input type="submit" class="mt-2 btn btn-danger form-control" value="Recherche">
            </form>
        </div>
        <div class="col">
            <h2>La faille réparée</h2>
            <form id="formXssFailleReparee" action="/scripts/failleXSS.php" method="POST">
                <label for="rechercheXSSFailleReparee"></label>
                <input id="rechercheXSSFailleReparee" class="form-control" type="text" name="rechercheXSSFailleReparee" placeholder="Tapez ici votre recherche" required />
                <input type="submit" class="mt-2 btn btn-success form-control" value="Recherche">
            </form>
        </div>
    </div>
</div>

<?php require_once './footer.php' ?>