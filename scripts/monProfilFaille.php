
<?php
require_once '../config.php';

if(isset($_POST['usernameFaille']) and isset($_POST['passwordFaille'])):
    $username = htmlentities($_POST['usernameFaille']);
    $password = htmlentities($_POST['passwordFaille']);

    $bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);

    $requete = $bdd->prepare('SELECT * FROM utilisateurs WHERE utilisateurs.username = :username');
    $requete->bindParam('username', $username);
    $requete->execute();
    $data = $requete->fetch(PDO::FETCH_ASSOC);

    if (!empty($data)):
        session_start();
        $_SESSION["username"] = $data['username'];
        $_SESSION["password"] = $data['password'];
    endif;

endif;

if (isset($_SESSION["username"])):
    ?>
    <h1>Éditer mon profil</h1>

    <p>Vous pouvez modifier toutes les informations de votre profil
        <?= $_SESSION["username"]; ?> ! </p>
    <p>Votre mot de passe : <?= $_SESSION["password"]; ?> </p>

<?php
else:
    echo "<h1 style='color:red;'>ACCES INTERDIT !!!</h1>";
endif;
?>
