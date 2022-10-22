
<?php
require_once '../config.php';

if(isset($_POST['username']) and isset($_POST['password'])):
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);

    $bdd = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8', DB_USER, DB_PASSWORD);

    $requete = $bdd->prepare('SELECT * FROM utilisateurs WHERE utilisateurs.username = :username and utilisateurs.password = :password');
    $requete->bindParam('username', $username);
    $requete->bindParam('password', $password);
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
