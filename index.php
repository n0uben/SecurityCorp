<?php require_once './header.php' ?>

<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger h4">Faille XSS</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel eros sit amet neque dictum gravida. aliquam convallis</p>
                    <a href="./xss.php" class="card-link">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger h4">Faille Login</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel eros sit amet neque dictum gravida. aliquam convallis</p>
                    <a href="./login.php" class="card-link">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger h4">Faille CSRF</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel eros sit amet neque dictum gravida. aliquam convallis</p>
                    <a href="./csrf.php" class="card-link">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger h4">Faille Composant</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel eros sit amet neque dictum gravida. aliquam convallis</p>
                    <a href="./composant.php" class="card-link">En savoir plus</a>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-danger h4">Faille Injection SQL</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel eros sit amet neque dictum gravida. aliquam convallis</p>
                    <a href="./injection.php" class="card-link">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php' ?>
