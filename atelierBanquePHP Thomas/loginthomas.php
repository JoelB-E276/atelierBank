<?php
    // tableau stockant les informations utilisateur
    $user = [
        "username" => "Dupont",
        "password" => "password1"
    ];
    // Si les champ nom et mot de passe ont été remplis
    if(isset($_POST["username"]) && isset($_POST["password"])) {
        // On vérifie qu'ils correspondent aux information du tableau
        if($_POST["username"] === $user["username"] && $_POST["password"] === $user["password"]) {
            // On démarre une session et on stocke l'utilisateur dedans avant de l'envoyer sur index
            session_start();
            $_SESSION["user"] = $user;
            header("Location:index.php");
            exit;
        }
        // Si les données rentrées dans le formulaire ne sont pas les bonnes
        else {
            $error_message = "Identifiants invalides";
        }
    }
    include "layout/header.php";
?>

<h2>Accéder à votre espace</h2>
<form action="" method="post" class="w-75 mx-auto my-5">
    <?php if(isset($error_message)): ?>
        <div class="alert alert-danger">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>
    <div>
        <label for="username" class="form-label">Votre nom d'utilisateur</label>
        <input type="text" name="username" id="username" class="form-control">
    </div>
    <div>
        <label for="password" class="form-label">Votre mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="my-5 text-center">
        <input type="submit" name="connexion" class="btn btn-dark text-white w-25 form-control" value="Connexion">
    </div>
</form>
</div>

<?php
    include "layout/footer.php";
?>